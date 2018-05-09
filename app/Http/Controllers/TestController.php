<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    public function index(){
        dd('ok');
    }
    public function test2(){
        dd('ok2');
    }
}
