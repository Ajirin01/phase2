<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Product;
use App\Order;
use App\Sale;
use App\Cart;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('Admin.dashboard');
    }
}
