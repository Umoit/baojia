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
    public function index(){
        $offers = Offer::orderBy('id', 'desc')->paginate(50);


        //$sections = Offer::select(['weight','price'])->distinct()->get();
        
        $sections = DB::table('countries')->join('offers','countries.id','=','offers.country_id')->get()->groupBy('country_id');
  
        //dd($sections);
       
        $countries = Country::all();


    	return view('admin.offerList',compact('offers','countries','sections'));
    }

    public function getCheck(Request $request){
    	dd($request);
    	echo "string";exit();

    }

    public function show(){
    	echo "1222";
    }
}
