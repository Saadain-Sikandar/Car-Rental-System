<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Company_info;
use App\Models\customer_orders;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    // Display Data from DB 
    public function home()
    {
        $cars = Car::all();
        return view('Admin.adminhome', compact('cars'));
    }

    public function carList()
    {
        $cars = Car::all();
        return view('Admin.admincarlist', compact('cars'));
    }

    // Display ends 

    // StoreCar In DB 
    public function addCar()
    {
        return view('Admin.adminaddcar');
    }
    // DB 
    public function storeCar(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'make'   => 'required',
            'model'  => 'required',
            'year'   => 'required|numeric',
            'color'  => 'required|string',
            'price'  => 'required|numeric',
            'carno'  => 'required',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png',
            'Desc'   => 'required|string',
            'status' => 'required',

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
            'status' => $request->status,

        ];

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('car_images'), $imageName);
            $data['image'] = $imageName;
        }

        Car::create($data);

        Alert::success('success', 'Car Added Successfully!');
        return redirect()->route('Admin.admincarlist');
    }

    // Storing ends 

    // Getting and editing data 

    public function editCar($id)
    {

        $cars = Car::findOrFail($id);
        return view('Admin.adminEditCar', compact('cars'));
    }

    public function updateCar(Request $request,  $id)
    {

        $request->validate([

            'name' => 'required',
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|numeric',
            'color' => 'required|string',
            'price' => 'required|numeric',
            'carno' => 'required',
            'Desc' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,Png',
            'status' => 'required',


        ]);

        $car = Car::findOrFail($id);
        $data = $request->only(['name', 'make', 'model', 'year', 'color', 'price', 'carno', 'Desc', 'status']);

        // if image exists

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('car_images'), $imageName);
            $data['image'] = $imageName;
        }

        $car->update($data);

        Alert::success('success', 'Car info updated Successfully');
        return redirect()->route('Admin.admincarlist');
    }

    // editing ends 

    // Deleting Cars 

    public function DeleteCars($id)
    {

        $car = Car::findorFail($id);
        // Delete image if exists
        if ($car->image && file_exists(public_path('car_images/' . $car->image))) {
            unlink(public_path('car_images/' . $car->image));
        }
        $car->delete();

        Alert::success('Deleted', 'Car Info Deleted Successfully!');
        return redirect()->route('Admin.admincarlist');
    }
    // Delete cars end 

    // displaying info 
    public function info()
    {
        try {
            $info = Company_info::all();
            return view('Admin.admininfo', compact('info'));
        } catch (\Exception $e) {
            echo ($e->getmessage());
        }
    }
    // displaying info ends 


    // Adding company info 
    public function infoForm()
    {
        return view('Admin.adminInfoForm');
    }

    public function AddCompanyinfo(Request $request)
    {

        try {
            $request->validate([

                'city' => 'required|string',
                'address' => 'required|string',
                'email' => 'required|email|string',
                'contact' => 'required|numeric'

            ]);

            $data = [

                'city' => $request->city,
                'address' => $request->address,
                'email' => $request->email,
                'contact' => $request->contact,
            ];
            Company_info::create($data);
            Alert::success('success', 'Info Added Successfully!');
            return redirect()->route('Admin.admininfo');
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
    }
    // adding companyinfo ends 

    // Get & Edit company info

    public function EditCompanyInfo($id)
    {

        $info = Company_info::findorFail($id);
        return view('Admin.adminEditCompanyinfo', compact('info'));
    }

    public function updateCompanyinfo(Request $request, $id)
    {

        try {
            $request->validate([

                'city' => 'required|string',
                'address' => 'required|string',
                'email' => 'required|email|string',
                'contact' => 'required|numeric',
            ]);

            $info = Company_info::findOrFail($id);
            $data = $request->only(['city', 'address', 'email', 'contact']);

            $info->update($data);
            Alert::success('success', 'Company info updated Successfully!');
            return redirect()->route('Admin.admininfo');
        } catch (\Exception $e) {
            echo ($e->getmessage());
        }
    }
    // Get & Edit company info ends 

    // Delete Company Info 

    public function DeleteCompanyInfo($id)
    {

        $info = Company_info::findorFail($id);

        $info->delete();

        Alert::success('success', 'Info Deleted Successfully!');
        return redirect()->route('Admin.admininfo');
    }
    // Delete Company Info ends


    //Order Details

    public function OrderDetails()
    {

        $orders = customer_orders::all();

        return view('Admin.adminOrderDetails', compact('orders'));
    }

    public function EditOrderStatus($id)
    {

        $orders = customer_orders::findOrFail($id);
        return view('Admin.EditOrderStatus', compact('orders'));
    }

    public function UpdateOrderStatus(Request $request, $id)
    {

        try {
            $request->validate([

                'order_status'
            ]);

            $orders = customer_orders::findOrFail($id);

            $data = $request->only(['order_status']);

            $orders->update($data);

            Alert::success('success', 'Order Status Updated!');

            return redirect()->route('Admin.adminOrderDetails');
        } catch (\Exception $e) {

            dd($e->getmessage());
        }
    }
}
