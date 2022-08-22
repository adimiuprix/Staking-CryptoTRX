<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('signin');
    }
    
    public function signup()
    {
        return view('signup');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function deposits()
    {
        return view('deposits');
    }

    public function history()
    {
        return view('history');
    }

    public function reff()
    {
        return view('reff');
    }

    public function settings()
    {
        return view('settings');
    }

}
