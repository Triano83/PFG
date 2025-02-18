<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homenoadmin extends Controller
{
    public function index(){
        return view("homenoadmin");
    }
}
