<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Product;
use App\User as User;
use App\Category as Category;
use App\Brand as Brand;
use Session;

class SiteController extends Controller
{
    public function shop(){
        
        if(Session::get("shopping_type") == "wholesale"){
            $products = Product::where('status', 'Active')->where('wholesale','on')->paginate(20);
        }else{
            $products = Product::where('status', 'Active')->paginate(20);
        }
        return view('shop',['products'=> $products]);
    }

    public function products_by_category($category){
        $category_data = Category::where('name', $category)->first();
        // return response()->json($category_data);
        if(Session::get("shopping_type") == "wholesale"){
            $products_by_category = Product::where('category_id',$category_data->id)->where('status', 'Active')->where('wholesale','on')->paginate(20);
        }else{
            $products_by_category = Product::where('category_id',$category_data->id)->where('status', 'Active')->paginate(20);
        }
        return view('products_by_category',['products_by_category'=> $products_by_category, 'category'=> $category]);
    }

    public function products_by_brand($brand){
        $brand_data = Brand::where('name', $brand)->first();
        // return response()->json($brand_data);
        if(Session::get("shopping_type") == "wholesale"){
            $products_by_brand = Product::where('brand_id', $brand_data->id)->where('status', 'Active')->where('wholesale','on')->paginate(20);
        }else{
            $products_by_brand = Product::where('brand_id', $brand_data->id)->where('status', 'Active')->paginate(20);
        }
        return view('products_by_brand',['products_by_brand'=> $products_by_brand, 'brand'=>  $brand]);
    }
    
    public function product_details($name){
        $product = Product::where('name',$name)->first();
        return view('product-details', ['product'=> $product]);
    }

    public function add_to_cart(Request $request){
        return response()->json($request->all());
    }

    public function cart(){
        return view('cart');
        // return response()->json($user);
    }

    public function shopping_setting(Request $request){
        // return response()->json($request->shopping_type);
        Session::put('shopping_type', $request->shopping_type);
        return redirect()->back();
    }

    public function update_cart(Request $request){
        return response()->json($request);
    }

    public function checkout(Request $request){
        return view('checkout');
        // return response()->json($request);
    }

    public function checkout_handler(Request $request){
        return response()->json($request);
    }

    public function my_account(Request $request){
        return view('my-account');
        // return response()->json($request);
    }

    public function register_login(Request $request){
        // return response()->json($request);
        return view('auth');
    }

    public function authenticate(Request $request){
        return response()->json($request);
    }
}
