<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthrController extends Controller
{
    public function index(){

        return view('back.pages.home');
    }
}
