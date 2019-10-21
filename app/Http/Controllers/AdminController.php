<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin-login');
    }
    public function login(Request $request){

        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'user_type'=>'admin'])){
            return redirect('/admin/dashboard');
        }
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
