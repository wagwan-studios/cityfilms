<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('Admin.login');
    }

    public function authenticate(LoginRequest $request){
        $creds = $request->validated();
        try {
            if(Auth::attempt($creds)){
                return redirect()->intended('/admin/dashboard');
            }
            return back()->with('error', 'Invalid Credentials');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function dashboard(){
        return view('Admin.Dashboard.index');
    }

    public function logout(){
        Auth::logout();
        Session::invalidate();
        return redirect()->route('admin.login');
    }
}
