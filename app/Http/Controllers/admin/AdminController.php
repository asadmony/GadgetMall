<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admin;

class AdminController extends Controller
{
    public function index(){
        return view('admin\dashboard');
    }
}
