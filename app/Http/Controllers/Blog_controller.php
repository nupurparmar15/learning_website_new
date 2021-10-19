<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog_Controller extends Controller
{
    public function show()
    {
        return view('blog');
    }    
    public function show_blog1()
    {
        return view('BE-BTech-cse-internship-training-institute-jodhpur');
    } 
    public function show_blog2()
    {
        return view('How-To-Find-Internships-In -Jodhpur-A-Step-By-Step-Guide-by-oilablearning');
    }
    public function show_blog3()
    {
        return view('get-the-best-php-training-In-Jodhpur-oilablearning');
    }
    public function show_blog4()
    {
        return view('Best-Way-to-Learn-Android-app-development-Blog-OilabLearning');
    }
    public function show_blog5()
    {
        return view('top-it-colleges-in-jodhpur-2021');
    }
    public function show_blog6()
    {
        return view('web-development-training-in-pali');
    }
    public function show_blog7()
    {
        return view('android-development-training');
    }
}
?>