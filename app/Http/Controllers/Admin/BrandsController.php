<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand as Brand;
use Validator;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('Admin.Brands.brand_list', ['brands'=> $brands]);
    }

    public function create()
    {
        return view('Admin.Brands.brand_creation_form');
    }

    public function store(Request $request)
    {
        $rule = [
            'name'=> 'required| min:3| max: 191',
            'status'=> 'required',
        ];
        $data = array();
        $data['name'] = $request->name;
        
        if($request->status == "on"){
            $data['status'] = "Active";
        }else{
            $data['status'] = "Inactive";
        }
        $valid = Validator::make($request->all(),$rule);

        if($valid->fails()){
            // return response()->json($valid->errors());
            return redirect()->back()->with('errors',$valid->errors());
        }else{
            $create_brand = Brand::create($data);

            if($create_brand){
                return redirect()->back()->with('success','record created!');
            }else{
                return redirect()->back()->with('errors','could not create record');
            }
        }
        // return response()->json($request->all());
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $brand_to_edit = Brand::find($id);
        return view('Admin.Brands.brand_creation_form', ['brand_id'=>$id, 'brand'=>$brand_to_edit]);
    }

    public function update(Request $request, $id)
    {
        return response()->json($request->all());
    }

    public function destroy($id)
    {
        return response()->json($id);
    }
}
