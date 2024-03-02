<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function logout(){
        return view('admin.auth-logout');
    }
}
