<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Waybill;
use App\WbItem;


class WaybillController extends Controller
{
    
	public function index(){

		$waybills = Waybill::orderBy('id', 'desc')->paginate(35);

    	return view('admin.waybillList',compact('waybills'));

	}

	public function store(Request $request){

        //dd($request);
        
        $data = $this->validate($request, [
            'track_no'=>'required|unique:waybills',
            'admin_id'=>'required'

        ]);

        try{
            
            Waybill::create($data);

        }catch (\Exception $e){
        
            return redirect()->back()->with(['flash_error' => $e]);
         
        }

    	
        return redirect()->back()->with(['flash_success' => '添加成功!']);


    }

    public function edit(Waybill $waybill){

    	$wbitems = WbItem::where('wb_id',$waybill->id)->get();
    	return view('admin.waybillEdit',compact('waybill','wbitems'));

    }

     public function itemStore(Request $request){
     	$data = $this->validate($request, [
            'wb_id'=>'',
            'time'=>'',
            'country'=>'',
            'city'=>'',
            'qofp'=>'',
            'notice'=>''

        ]);



        try{
            
            WbItem::create($data);

        }catch (\Exception $e){
        
            return redirect()->back()->with(['flash_error' => $e]);
         
        }

    	
        return redirect()->back()->with(['flash_success' => '添加成功!']);




    }

    
    public function itemEdit($id){
    	// $wbitems = WbItem::where('wb_id',$waybill->id)->get();
    	$wbitem = WbItem::find($id);
    	return view('admin.wbitemEdit',compact('wbitem'));

    }

    public function itemUpdate(Request $request,$id){
    	$data = $this->validate($request, [
            'wb_id'=>'',
            'time'=>'',
            'country'=>'',
            'city'=>'',
            'qofp'=>'',
            'notice'=>''

        ]);



        try{
            
            WbItem::whereId($id)->update($data);

        }catch (\Exception $e){
        
            return redirect()->back()->with(['flash_error' => $e]);
         
        }

    	
        return redirect('admin/waybill/'.$request['wb_id'].'\edit')->with(['flash_success' => '更新成功!']);

    }

}