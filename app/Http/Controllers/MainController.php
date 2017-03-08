<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function Index()
    {
        return view('index');
    }

    public function About()
    {
        return view('about');
    }

    public function Drone()
    {
        return view('drone');
    }

    public function Contact()
    {
        return view('contact');
    }

}
