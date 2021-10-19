<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hellocontroller1 extends Controller
{
    public function show()
    {
        return view('helloworld');
    }    //
}
