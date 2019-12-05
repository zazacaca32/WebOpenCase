<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ["avatar" => "https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/84/84c5dd590a4ce4745a4d1011e68d9e6dacd99f98_full.jpg"]);
    }
}
