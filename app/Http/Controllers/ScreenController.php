<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\customer_order;
use App\Models\order_items;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

        // decode cart from frontend
        $cart = json_decode($request->cart, true);

        if (!$cart || count($cart) == 0) {

            return back()->with(Alert::error('error', 'Cart is empty!'));
        }

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

        // Save each car in order_items
        foreach ($cart as $item) {
            order_items::create([
                'order_id' => $order->id,
                'car_id' => $item['id'],
                'price' => $item['price'],
                'color' => $item['color'],
                'year' => $item['year'],
            ]);
        }
        return response()->json([
            'message' => 'Order stored successfully',
            'order_id' => $order->id
        ]);
    }



    // my Rentals 
    public function myRentals()
    {
        return view('Screen.myRentals');
    }
}
