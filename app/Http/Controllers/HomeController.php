<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function loginPage(Request $request)
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect()->intended('dashboard');
        } else {

            $notification = array(
                'message' => 'Invalid credentials!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }

    public function index(Request $request)
    {
        return view('guest.index');
    }
}
