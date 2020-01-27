<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // User role
        $role = Auth::user()->roles->first()->role_name; 
        
        // Check user role
        if($role=='Admin'){
            return view('admin.admin');
        }else if($role=='Superadmin'){
            return view('superadmin.superadmin');
        }else{
            return view('/');
        }
    }
    
}
