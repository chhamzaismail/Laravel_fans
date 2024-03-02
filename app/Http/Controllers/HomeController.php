<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function lockscreen(){
        return view('admin.auth-lock-screen');
    }
}
