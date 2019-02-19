<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Offer;
use App\Country;
use DB;
use Event;
use Pinyin;
class OfferController extends Controller
{
    public function __construct(){
        $this->middleware('check.admin');
    }

    public function index(){
        $offers = Offer::orderBy('id', 'desc')->paginate(50);


        //$sections = Offer::select(['weight','price'])->distinct()->get();
        
        $sec = DB::table('countries')->join('offers','countries.id','=','offers.country_id')->get()->groupBy('name');

        foreach ($sec as $key => $value) {
            $sections[$key] = $value->groupBy('country_id');
        }
        
        
        
  
      
       
        $countries = Country::all();


    	return view('admin.offerList',compact('offers','countries','sections'));
    }

    // public function getCheck(Request $request){
    //          $countries = Country::all();

    //     //$sections = DB::table('countries')->join('offers','countries.id','=',$request->get('country_id'))->get()->groupBy('country_id');
        
    // 	$sec = Offer::where('country_id',$request->get('country_id'))->where('weight',$request->get('weight').'kg')->get()->groupBy('name');




    //     if (count($sec)>0) {
    //         foreach ($sec as $key => $value) {
    //             if ($key=='fedex') {
    //                 $fedex = $value->groupBy('country_id');

    //             }else{
    //                 $sections[$key] = $value->groupBy('country_id');
    //             }
           

    //         }

    //         $sections['fedex'] = $fedex;

    //         return view('admin.offerCheckList',compact('countries','sections'));
    //     }else{
    //         $sec = Offer::where('country_id',$request->get('country_id'))->get()->groupBy('name');


    //         foreach ($sec as $key => $value) {
    //             foreach ($value as $k => $v) {


                    
    //                 if (strpos($v['weight'],'_')||strpos($v['weight'],'+')) {

    //                     $shuzi = strstr($v['weight'], 'kg', TRUE);
    //                     $tmpArr = explode('_', $shuzi);
                        
    //                     $weight = (int)$request->get('weight');
    //                     $a = (int)$tmpArr[0];
    //                     $b = (int)$tmpArr[1];
    //                     if ($weight>=$b||$weight<=$a) {
    //                         $value->forget($k);

    //                     }
                     

                        
    //                 }else{
    //                     $value->forget($k);
                        
    //                 }

    //             }
    //             //dd($value);
    //             //dd($new_rs);
                
    //         }
    //         return view('admin.offerCheckList',compact('countries','sections'));


    //     }
        



       


    // }
    
    public function getCheck(Request $request){
//         $pinyin = app('pinyin');
// echo $pinyin->sentence('带着希望去旅行，比到达终点更美好');exit();

             $countries = Country::all();
        //$sections = DB::table('countries')->join('offers','countries.id','=',$request->get('country_id'))->get()->groupBy('country_id');
        $sec = Offer::where('country_id',$request->get('country_id'))->where('weight',$request->get('weight').'kg')->get()->groupBy('name'); 

        echo "string";exit();
        if (count($sec)>0) {
            foreach ($sec as $key => $value) {
                if ($key=='fedex') {
                    $fedex = $value->groupBy('country_id');
                }else{
                    $sections[$key] = $value->groupBy('country_id');
                }
           
            }
            $sections['fedex'] = $fedex;
            return view('admin.offerCheckList',compact('countries','sections'));
        }else{
            return view('admin.offerList',compact('countries'));
        }
        
       
    }

    public function store(Request $request){
        $arr['country_id'] = $request->post('country_id');

        foreach ($request->post() as $key => $value) {
            if($key=='country_id'||$key=="_token"){
                continue;
            }
            $arr['weight'] = $key;
            $arr['price'] = $value;
            $arr['type'] = 1;
            $arr['description'] = 'des';

            try{
                Offer::updateOrCreate($arr);
            }catch (Exception $e) {  
                echo 'Caught exception: ',  $e->getMessage(),'<br>';  
            }  

        }
        return back()->with('flash_success', '添加成功.');

    }

    public function show(){
    	echo "1222";
    }
}
