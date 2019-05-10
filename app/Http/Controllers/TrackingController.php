<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Waybill;
use App\Wbitem;

class TrackingController extends Controller
{
    public function index(){
    	return view('frontend.tracking');
    }

    public function postCheck(Request $request){
    	 $data = $this->validate($request, [
            'track_no'=>'required'


        ]);

	 	$waybill = new Waybill;
    	$id = $waybill->id($data['track_no']);
    	if (is_null($id)) {
    		return redirect()->back()->withErrors(['没有找到货单号！']);
    	}

    	$waybill = Waybill::find($id);
    	$wbitems = Wbitem::where('wb_id',$id)->get();
    	return view('frontend.tracking',compact('wbitems','waybill'));
    	
    }
}
