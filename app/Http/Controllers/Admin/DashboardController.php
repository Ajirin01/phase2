<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Product;
use App\Order;
use App\Sale;
use App\Cart;
use Carbon\Carbon;
use Session;

class DashboardController extends Controller
{
    public function dashboard(){
        $shopping_type = Session::get('shopping_type');
        // echo $shopping_type == null;
        // exit;
        if($shopping_type == null){
            Session::put('shopping_type','retail');
        }else {
            ;
        }
        // return response()->json(Session::get('shopping_type'));

        $latest_orders = Order::orderBy('id', 'desc')->take(7)->get();
        $orders = Order::all();
        // $products = Product::all();
        // $jan_sale = Sale::where();
        $sales = Sale::all();
        $month_sale = [];
        $months = [];
        $month_sale[0] = [];
        $month_sale[1] = [];
        $month_sale[2] = [];
        $month_sale[3] = [];
        $month_sale[4] = [];
        $month_sale[5] = [];
        $month_sale[6] = [];
        $month_sale[7] = [];
        $month_sale[8] = [];
        $month_sale[9] = [];
        $month_sale[10] = [];
        $month_sale[11] = [];
        // $month_sale[12] = [];

        // return response()->json($month_sale);
        for ($i=0; $i < count($sales); $i++) { 
            for ($j=0; $j < 12; $j++) { 
                if (Carbon::parse($sales[$i]->created_at)->month == $j+1) {
                    array_push($month_sale[$j], $sales[$i]->total);
                    array_push($months, Carbon::parse($sales[$i]->created_at)->format('M'));
                }
            }
        }

        $months_array = array_values(array_unique($months));

        // return response()->json(array_values(array_unique($months)));

        $products = [];

        for ($i=0; $i < 12; $i++) { 
            if (count($month_sale[$i]) == 0) {
                ;
            }else{
                array_push($products, ['name' => '', 'data'=> $month_sale[$i]]);
            }
            
        }
        // return response()->json($products);
        // $products = [
        //     ['name' => 'January', 'data'=> $jan_sale],
        //     ['name' => 'Feburary', 'data'=> $feb_sale],
        //     ['name' => 'March', 'data'=> $mar_sale],
        //     ['name' => 'May', 'data'=> $may_sale],
        //     ['name' => 'June', 'data'=> $jun_sale],
        //     ['name' => 'July', 'data'=> $jul_sale],
        //     ['name' => 'August', 'data'=> $aug_sale],
        //     ['name' => 'September', 'data'=> $sep_sale],
        //     ['name' => 'Octobar', 'data'=> $oct_sale],
        //     ['name' => 'November', 'data'=> $nov_sale],
        //     ['name' => 'December', 'data'=> $dec_sale],
        // ];

        $latest_products = Product::orderBy('id', 'desc')->take(10)->get();

        // $sales = Sale::all();
        $carts = Cart::all();
        $users = User::where('role', 'user')->get();
        
        // return response()->json($sales[0]->total);

        // return response()->json(Carbon::parse($sales[16]->created_at)->month);
        return view('Admin.dashboard',['latest_orders'=> $latest_orders,
                    'latest_products'=> $latest_products, 'products'=> $products,
                    'sales'=> $sales, 'total_orders'=> $orders,
                    'users'=> $users, 'months'=> $months_array
                ]);
    }
}
