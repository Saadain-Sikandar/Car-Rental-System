<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home() {
        return view('Admin.adminhome');
    }

    public function carList() {
        return view('Admin.admincarlist');
    }

    public function addCar() {
        return view('Admin.adminaddcar');
    }

    public function info() {
        return view('Admin.admininfo');
    }

    public function infoForm() {
        return view('Admin.adminInfoForm');
    }
}
