<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Country;

class CountryController extends Controller
{

    public function __construct(){
        $this->middleware('check.admin', ['except' => ['show','index']]);
    }


    public function index(){
        $countries = Country::all();

    	return view('admin.countryList',compact('countries'));
    }

    public function edit(Country $country){
        return view('admin.countryEdit',compact('country'));

    }

    public function store(Request $request){

        //dd($request['tags']);
        
        $data = $this->validate($request, [
            'name'=>'required',
            'code'=> 'required',

        ]);



         Country::create($data);



    	
        return redirect()->back()->with(['flash_success' => '添加成功!']);


    }

    public function update(Request $request,$id){
     

        //dd($request);
        $data = $this->validate($request, [
            'name'=>'required',
            'code'=> 'required'
        ]);
       




        $country = Country::findOrFail($id);
        $country->update($data);
        

        return redirect()->back()->with(['flash_success' => '更新成功!']);
        

    }



    public function delete($id){
        $country = Country::findOrFail($id);
        $country->delete();
        //return redirect('admin/product')->with(['flash_success' => '删除产品成功!']);
        
        //return response()->json(['data'=>'删除成功！']);
        return redirect()->back()->with(['flash_success' => '删除成功!']);


    }

    public function clearCountry(){
        Country::truncate();
        return redirect()->back()->with(['flash_success' => '删除成功!']);
        
    }
}
