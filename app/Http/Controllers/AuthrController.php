<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthrController extends Controller
{
    public function index(Request $request){
        return view('back.page.home');
    }
}
