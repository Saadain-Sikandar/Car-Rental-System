<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function home()
    {
        $cars = Car::all();
        return view('Admin.adminhome',compact('cars'));
    }

    // Fetching  Data from DB 
    public function carList()
    {
        $cars = Car::all();
        return view('Admin.admincarlist',compact('cars'));
    }

    // fetching ends 

    public function addCar()
    {
        return view('Admin.adminaddcar');
    }

    // StoreCar In DB 
    public function storeCar(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'make'   => 'required',
            'model'  => 'required',
            'year'   => 'required|numeric',
            'color'  => 'nullable|string',
            'price'  => 'required|numeric',
            'carno'  => 'required',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png',
            'Desc'   => 'required|string',
        ]);

        $data = [
            'name'  => $request->name,
            'make'  => $request->make,
            'model' => $request->model,
            'year'  => $request->year,
            'color' => $request->color,
            'price' => $request->price,
            'carno' => $request->carno,
            'Desc'  => $request->Desc,
        ];

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('car_images'), $imageName);
            $data['image'] = $imageName;
        }

        Car::create($data);

        Alert::success('success','Car Added Successfully!');
        return redirect()->route('Admin.admincarlist');
    }

    // Storing ends 

    public function info()
    {
        return view('Admin.admininfo');
    }

    public function infoForm()
    {
        return view('Admin.adminInfoForm');
    }
}
