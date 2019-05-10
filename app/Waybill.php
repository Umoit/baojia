<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
class Waybill extends Model
{
    protected $fillable = [
        'track_no','admin_id'
    ];


    public function admin($admin_id){
    	return Admin::find($admin_id)->name;
    }


    public function id($track_no){
    	return Waybill::where('track_no',$track_no)->value('id');
    }
}
