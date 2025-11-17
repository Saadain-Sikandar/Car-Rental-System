<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScreenController extends Controller
{
    public function home()
    {
        return view('Screen.home');
    }

    public function aboutUs()
    {
        return view('Screen.aboutus');
    }

    public function allCars()
    {
        return view('Screen.allCars');
    }
    public function carDetails()
    {
        return view('Screen.carDetails');
    }
     public function CheckOut()
    {
        return view('Screen.checkOut');
    }
    public function myRentals()
    {
        return view('Screen.myRentals');
    }
}
