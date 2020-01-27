<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','role:Superadmin']);
    }

    public function index()
    {
		return view('superadmin.superadmin');
        
    }
}
