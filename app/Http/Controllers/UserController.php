<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

        //

        $user=User::find(1);

       // dd($user->articles[0]->name);

        dd($user->address->tel);


    }
}
