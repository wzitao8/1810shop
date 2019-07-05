<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegController extends Controller
{
    public function reg(){
        return view('login.reg');
    }

    public function regadd(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $pass = $request->input('pwd');
        echo $name;
        echo $email;
        echo $pass;

    }
}
