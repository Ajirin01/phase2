<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product as Product;
use App\Category as Category;
use App\Brand as Brand;
use App\User as User;
use App\Cart as Cart;
use Session;
use Validator;


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
        if(!Auth::check()){
            return redirect('register-login');
        }else{
            $user_id = Auth::user()->id;
            $data = $request->all();
            $data['user_id'] = $user_id;
            // return response()->json($data);
            // return response()->json($data);
            $add_to_cart = Cart::create($data);
            return redirect()->back();
        }
    }

    public function cart(){
        $carts = Cart::all();
        // return response()->json($carts);
        return view('cart', ['carts'=> $carts]);
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
        if(Auth::user()){
            return redirect('/');
        }else{
            return view('auth');
        }
    }

    public function authenticate(Request $request){
        // return response()->json($request);

        if(isset($_POST['login'])){
            $rule = [
                'email' => 'required',
                'password' => 'required| min: 4| max: 50'
            ];

            $validate = Validator::make($request->all(), $rule);
            
            if($validate->fails()){
                return response()->json($validate->errors());
            }else{
                $login_user = Auth::attempt(['email'=> $request->email, 'password'=> $request->password]);
                // echo $login_user;
                return response()->json($login_user);
            }
            
        }else if(isset($_POST['register'])){
            $rule = [
                'email' => 'required',
                'name' => 'required| min: 6| max: 150',
                'password' => 'required| min: 4| max: 50'
            ];

            $validate = Validator::make($request->all(), $rule);
            
            if($validate->fails()){
                return response()->json($validate->errors());
            }else{
                $user_exit = Auth::attempt(['email'=> $request->email, 'password'=> $request->password], $request->remember);
                if($user_exit){
                    return response()->json("user exit");
                }else{
                    $register_user = User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                    ]);
                    // echo $login_user;
                    $login_user = Auth::attempt(['email'=> $request->email, 'password'=> $request->password]);
                    return response()->json($login_user);
                }
                
            }
        }

    }

    public function logout(Request $request){
        Auth::logout(); 
        return redirect()->back();
    }
}
