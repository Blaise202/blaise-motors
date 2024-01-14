<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Front.authority.login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $id = $user->id;
            $data = User::find($id)->get();

            switch ($user->title) {
                case 'admin':
                    return redirect()->intended('dashboard');
                case 'hrmanager':
                    return redirect()->intended('hrDashboard');
                case 'distributer':
                    return redirect()->intended('disDashboard');
                default:
                    return redirect()->intended('udashboard');
            }
        } else {
            return redirect()->back()->withErrors(['error' => 'Invalid login credentials']);
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/'); // Redirect to the desired page after logout
    }


}