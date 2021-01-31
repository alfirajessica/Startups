<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = [];
        $view = "";

       // $view = "dev-page/dev-event";

        return view("devPage/devEvent");
    }

    public function home()
    {
       
        return view("/devPage/devEvent");
    }

    // public function devEvent(){
    //     return view("dev-page/dev-event");
    // }
}
