<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WbItem extends Model
{
    protected $fillable = [
        'wb_id','time','country','city','qofp','notice'
    ];
}
