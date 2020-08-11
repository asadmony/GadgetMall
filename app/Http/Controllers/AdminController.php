<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except('admin.logout');
        $this->middleware('role:super')->except('admin.logout');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
