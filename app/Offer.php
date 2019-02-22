<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'country_id', 'weight','price','type','description','name','name_des'
    ];


    public function country($country_id){
    	return Country::select('name')->where('id',  $country_id)->value('name');
    }
}
