<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\customer_order;
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

    // Order Details 

    public function placeOrder(Request $request)
    {

        $request->validate([

            'fullname' => 'required',
            'email' => 'reqired|email',
            'contact' => 'required',
            'cnic' => 'required',
            'address' => 'required',
            'city' => 'required',
            'days' => 'required|interger',
            'payment_method' => 'required',
        ]);

        $data = ([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'contact' => $request->contact,
            'cnic' => $request->cnic,
            'address' => $request->address,
            'city' => $request->city,
            'days' => $request->days,
            'payment_method' => $request->payment_method,
        ]);

        $order =  customer_order::create($data);
    }



    // my Rentals 
    public function myRentals()
    {
        return view('Screen.myRentals');
    }
}
