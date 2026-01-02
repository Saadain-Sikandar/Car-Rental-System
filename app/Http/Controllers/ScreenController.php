<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Company_info;
use App\Models\customer_orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ScreenController extends Controller
{
    // Home 
    public function home()
    {
        $cars = Car::all();
        return view('Screen.home', compact('cars'));
    }
    // About us 
    public function aboutUs()
    {
        $info = Company_info::all();
        return view('Screen.aboutus', compact('info'));
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
        DB::beginTransaction();

        try {
            $request->validate([
                'fullname' => 'required',
                'email' => 'required|email',
                'contact' => 'required',
                'cnic' => 'required',
                'address' => 'required',
                'city' => 'required',
                'days' => 'required|integer',
                'payment_method' => 'required',
                'cart_data' => 'required',
            ]);

            // Decode JSON string to array
            $cart = json_decode($request->cart_data, true) ?? [];

            if (!is_array($cart) || empty($cart)) {
                throw new \Exception('Invalid cart data');
            }

            $data = [
                'fullname' => $request->fullname,
                'email' => $request->email,
                'contact' => $request->contact,
                'cnic' => $request->cnic,
                'address' => $request->address,
                'city' => $request->city,
                'days' => $request->days,
                'payment_method' => $request->payment_method,
                'order_data' => json_encode($cart),
                'order_status' => 'Pending',
            ];

            customer_orders::create($data);

            // Update car status safely
            foreach ($cart as $item) {
                Car::where('id', $item['id'])
                    ->where('status', 'Available')
                    ->update(['status' => 'Not Available']);
            }

            DB::commit();

            Alert::success('Success', 'Order placed Successfully!');
            return redirect()->route('home');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }
    }
    // Search Bar
    public function CarSearch(Request $request)
    {

        $query = $request->get('query');
        $cars = Car::where('name', 'LIKE', "%{$query}%")
            ->orWhere('model', 'LIKE', "%{$query}%")
            ->get();

        return view('Screen.carSearch', compact('cars'));
    }

    // my Rentals 

    public function myRentals()
    {
        $user = Auth::user();

        $orders = customer_orders::where('email', $user->email)->get();

        $rentals = [];

        foreach ($orders as $order) {
            // Decode JSON string to array
            $cars = json_decode($order->order_data, true);

            if (is_array($cars)) {
                foreach ($cars as $car) {
                    // Add order info to each car
                    $car['days'] = $order->days;
                    $car['order_time'] = $order->created_at;
                    $car['status'] = $order->order_status;

                    // total price for this car
                    $car['total'] = ($car['price'] ?? 0) * ($order->days ?? 0);
                    $rentals[] = $car;
                }
            }
        }

        return view('Screen.myRentals', compact('rentals'));
    }
}
