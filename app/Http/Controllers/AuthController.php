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

        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',

        ]);
        $data = $request->all();

        $data = [

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ];

        $user = User::create($data);

        if ($user) {

            Alert::success('success', 'Registration successfull!');
            return redirect()->route('auth.login');
        } else {
            return redirect()->route('auth.signup')->with('error', 'Registration Failed!');
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
            // Admin credentials
            $adminCredentials = [
                'email' => 'adminCL@gmail.com',
                'password' => 'adminCL.123'
            ];
            // Checking Admin 
            if (
                $request->email === $adminCredentials['email'] &&
                $request->password === $adminCredentials['password']
            ) {

                Auth::loginUsingId(1);
                Alert::success('success', 'Login Successfull!');
                return redirect()->route('Admin.adminhome');
            }
            // checking Admin ends 
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                Alert::success('success', 'Login Successfull!');
                return redirect()->route('home');
            } else {
                Alert::error('error', 'Login Failed Incorrect Email/Password!');
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
