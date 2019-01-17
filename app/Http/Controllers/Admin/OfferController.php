<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Offer;
use App\Country;
use DB;
use Event;

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
  
      //  dd($sections);
       
        $countries = Country::all();


    	return view('admin.offerList',compact('offers','countries','sections'));
    }

    public function getCheck(Request $request){
        //$sections = DB::table('countries')->join('offers','countries.id','=',$request->get('country_id'))->get()->groupBy('country_id');
    	$sections = Offer::where('country_id',$request->get('country_id'))->get()->groupBy('country_id');
    	

        foreach ($sections as $key => $value) {
            foreach ($value as $k => $v) {
                dd($v);
            }
            dd($value);
        }
        //dd($sections);


        $countries = Country::all();

    	return view('admin.offerList',compact('countries','sections'));


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
