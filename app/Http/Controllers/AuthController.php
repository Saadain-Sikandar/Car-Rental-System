<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{

    public function signup()
    {

        return view('auth.signup');
    }

    public function RegisterUser(Request $request)
    {

        try {
            $request->validate([

                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',

            ]);
            $data = $request->all();

            $data = [

                'name' => $request->name,
                'email' => $request->email,
                'password' =>Hash::make($request->password),

            ];

            $user = User::create($data);

            if (!$user) {

                Alert::error('error', 'Registration Failed');
                return redirect()->route('auth.signup');
            } else {

                Alert::success('success', 'Registration successfull!');
                return redirect()->route('auth.login');
            }
        } catch (\Exception $e) {

            dd($e->getmessage());
        }
    }

    public function login()
    {

        return view('auth.login');
    }


    public function LoginUser(Request $request)
    {
        try {

            $request->validate([

                'email' => 'required|email',
                'password' => 'required',

            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                Alert::success('success', 'Login Successfull!');
                return redirect()->route('home');
            } else {
                Alert::error('error', 'Login Failed!');
                return redirect()->route('auth.login');
            }
        } catch (\Exception $e) {

            dd($e->getmessage());
        }
    }

    public function LogoutUser()
    {

        Auth::logout();
        Session::flush();
        return redirect()->route('auth.login');
    }
}
