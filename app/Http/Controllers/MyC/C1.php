<?php

namespace App\Http\Controllers\MyC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C1 extends Controller
{
    public function page1(){
        return view('main');
    }
}
