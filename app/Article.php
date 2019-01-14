<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'category_id', 'title','content','img','comments_number','admin_id'
    ];

    // public function replies()
    // {
    //     return $this->hasMany(Reply::class);
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    } 

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    static function getArticleByCat($id,$num=10){
      
        return Article::where('category_id',$id)->take($num)->get();
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
