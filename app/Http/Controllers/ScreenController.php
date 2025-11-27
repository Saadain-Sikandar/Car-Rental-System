<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class ScreenController extends Controller
{
    public function home()
    {
        $cars = Car::all();
        return view('Screen.home', compact('cars'));
    }

    public function aboutUs()
    {
        return view('Screen.aboutus');
    }
    // All cars 
    public function allCars()
    {
        $cars = Car::all();
        return view('Screen.allCars', compact('cars'));
    }
    // Single car details 
    public function carDetails()
    {
        return view('Screen.carDetails');
    }
    public function carinfoDetails($id)
    {
        try {
            $car = Car::findOrFail($id);
            return view('Screen.carDetails', compact('car'));
        } catch (\Exception $e) {
            dd($e->getmessage());
        }
    }
    // Checkout 
    public function CheckOut()
    {
        return view('Screen.checkOut');
    }
    // my Rentals 
    public function myRentals()
    {
        return view('Screen.myRentals');
    }
}
