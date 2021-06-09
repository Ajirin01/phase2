<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product as Product;
use App\Brand as Brand;
use App\Category as Category;
use Validator;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Admin.Products.product_list',['products' => $products]);
    }
    
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('Admin.Products.product_creation_form', ['brands'=> $brands, 'categories'=> $categories]);
    }
    
    public function store(Request $request)
    {
        // return response()->json($request->all());
        $rule = [
            'category'=> 'required',
            'brand'=> 'required',
            'name'=> 'required| min:3| max: 191',
            'price'=> 'required| integer',
            'size'=> 'required',
            'description'=> 'required| min: 5| max: 1000',
            'prescription'=> 'required',
            'stock'=> 'required| integer',
            'shipping_price'=> 'required| integer',
        ];
        $data = array();
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $data['sale_type'] = $request->sale_type;
        $data['brand_id'] = $request->brand;
        $data['category_id'] = $request->category;
        
        if($request->status == "on"){
            $data['status'] = "Active";
        }else{
            $data['status'] = "Inactive";
        }
        $data['size'] = $request->size." ".$request->retail_quantity;
        $data['prescription'] = $request->prescription;
        if($request->wholesale == "on"){
            $data['wholesale'] = $request->wholesale;
            $data['wholesale_size'] = $request->wholesale_size." ".$request->wholesale_quantity;
            $data['wholesale_price'] = $request->wholesale_price;
            $data['wholesale_stock'] = $request->wholesale_stock." ".$request->wholesale_stock_quantity;
        }
        $data['stock'] = $request->stock;
        $data['shipping_cost'] = $request->shipping_price;

        $valid = Validator::make($request->all(),$rule);

        if($valid->fails()){
            // return response()->json($valid->errors());
            return redirect()->back()->with('errors',$valid->errors());
        }else{
            if($request->hasFile('image')){
                $image_file = $request->file('image');
                $image_exe = $image_file->getClientOriginalExtension();
                $image_name = rand(123456789,999999999).'.'.$image_exe;
                $upload_path = public_path('uploads/');
                
                $data['image'] = $image_name;

                $create_product = Product::create($data);

                if($create_product){
                    $image_file->move($upload_path, $image_name);
                    return redirect()->back()->with('success','record created!');
                }else{
                    return redirect()->back()->with('errors','could not create record');
                }
            }else{
                return redirect()->back()->with('errors','product image is required');
            }
        }
    }
    
    public function show($id)
    {
        return response()->json("product details");
    }

    public function edit($id)
    {
        return response()->json("product edit form");
    }

    public function update(Request $request, $id)
    {
        return response()->json("product update handler");
    }
    
    public function destroy($id)
    {
        return response()->json("product delete handler");
    }
}
