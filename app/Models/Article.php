<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //声明一个方法
    public function user(){

        return $this->belongsTo(User::class,"user_id");
    }
}
