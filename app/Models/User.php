<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    //通过用户找文章
    public function articles()
    {

        return $this->hasMany(Article::class, "user_id");
    }

    //通过用户找地址
    public function address(){

        return $this->hasOne(Address::class,"user_id");
    }

}
