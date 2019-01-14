<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'url_name','description','img','parent_id'
    ];

     //生成目录树
 	public function subcats()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
}
