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
        $orders = Order::all();
        // $products = Product::all();
        $products = [
            ['name' => 'cloroquine', 'data'=> [10,43,65,98,21,53,93]],
            ['name' => 'combisulate', 'data'=> [39,58,65,23,76,78,98]],
            ['name' => 'codine', 'data'=> [9,21,32,54,78,10,21]],
            ['name' => 'codoline', 'data'=> [43,98,99,32,23,25,78]],
            ['name' => 'ero arike', 'data'=> [30,87,33,108,89,32,93]],
            ['name' => 'rob', 'data'=> [23,22,97,89,38,39,92]],
            ['name' => 'turari', 'data'=> [78,32,11,88,99,12,98]],
        ];
        $sales = Sale::all();
        $carts = Cart::all();

        return view('Admin.dashboard',['orders'=> $orders, 'products'=> $products, 'sales'=> $sales]);
    }
}
