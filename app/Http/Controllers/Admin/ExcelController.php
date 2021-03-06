<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Maatwebsite\Excel\Facades\Excel;

use App\Article;
use App\Country;
use App\Offer;

use App\Jobs\ProcessOffer;

class ExcelController extends Controller
{
    public function __construct(){
        $this->middleware(['check.admin','role:admin'], ['except' => ['show','index','getCheck']]);

    }
    

    public function export(){
       $cellData = [
        ['编号','姓名','绩效','电话号码'],
        ['10001','AAAAA','99','150-xxxx-xxxx'],
        ['10002','BBBBB','92','137-xxxx-xxxx'],
        ['10003','CCCCC','95','157-xxxx-xxxx'],
        ['10004','DDDDD','89','177-xxxx-xxxx'],
        ['10005','EEEEE','96','188-xxxx-xxxx'],
        ['10006','FFFFF','96','180-xxxx-xxxx'],
        ['10007','ggggg','96','181-xxxx-xxxx'],
        ['10008','HHHHH','96','182-xxxx-xxxx'],
    	];
 
	 
	    Excel::create(iconv('UTF-8', 'GBK', '模板文件'),function($excel) use ($cellData){
	        $excel->sheet('score', function($sheet) use ($cellData){
	            $sheet->rows($cellData);
	        });
	    })->store('xls')->export('xls');

	}


    public function offerImport(Request $request){


 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path)->get();

        
    
        if($data->count()){
            foreach ($data as $key => $value) {
                // dd($data);
                
            
                $country_id =  Country::getCountryId($value['code']);
               
                
                $arr = [];

                $res = $value->toArray();
                

                //dd($res);
                foreach ($res as $k => $v ) {
                    if ($k=='name'||$k=='code'||$k=='country'||$k=='name_des') {
                        continue;
                    }
                    $arr['weight'] = $k;
                    $arr['price'] = $v;
                    $arr['type'] = 1;
                    
                    $arr['country_id'] = Country::getCountryId('OTHER')[0];
                    if (count( $country_id)>0) {
                        $arr['country_id'] = $country_id[0];
                    }

                    $arr['description'] = "des";
                    $arr['name'] =  $value['name'];
                    $arr['name_des'] =  $value['name_des'];

                    //ProcessOffer::dispatch($arr);
                    $this->dispatch(new ProcessOffer($arr));

                }



            }
 
        }
 
        return back()->with('flash_success', '导入成功.');



    
    }

    public function countryImport(Request $request){


        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path)->get();


        if($data->count()){
            foreach ($data as $key => $value) {
  
                Country::updateOrCreate([
                'code' => $value->code, 
                'name'=> $value->name,
                ]);

            }

          
        }
 
         return back()->with('flash_success', '导入成功.');



    
    }
}
