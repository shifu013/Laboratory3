<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function index()
    {
        return view('Shop/index');
    }

    public function product(){
        return view('Shop/product');
    }
    public function about(){
        return view('Shop/about');
        
    }
    public function services(){
        return view('Shop/services');
    }
    public function contact(){
        return view('Shop/contact');
    }
}
