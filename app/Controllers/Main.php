<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function input()
    {
        return view('pages/input');
    }

    public function monitor()
    {
        return view('pages/monitor');
    }

    public function about()
    {
        return view('pages/about');
    }

    //--------------------------------------------------------------------

}
