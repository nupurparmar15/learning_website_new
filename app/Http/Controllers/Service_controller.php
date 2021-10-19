<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service_Controller extends Controller
{
    public function show_service1()
    {
        return view('how-to-learn-php');
    }    
    public function show_service2()
    {
        return view('python-training');
    } 
    public function show_service3()
    {
        return view('mern-stack-training');
    }
    public function show_service4()
    {
        return view('mean-stack-training');
    }
    public function show_service5()
    {
        return view('web-development-training');
    }
    public function show_service6()
    {
        return view('digital-marketing-training-in-jodhpur');
    }
    public function show_service7()
    {
        return view('mobile-app-development-training');
    }
    public function show_blog7()
    {
        return view('android-development-training');
    }
}
?>