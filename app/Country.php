<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   protected $fillable = [
        'name', 'code'
    ];


    public static function getCountryId($code){
    	return Country::where('code',$code)->pluck('id');
    }

    public static function getName($id){
    	return Country::where('id',$id)->pluck('name');
    }

}
