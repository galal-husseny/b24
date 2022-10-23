<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
       $products = Product::all();
       return view('products.index',compact('products'));
    }

    public function create()
    {
        $brands =  Brand::select('id','name_en')->orderBy('name_en','ASC')->get();
        $subcategories = DB::table('subcategories')->select('name_en','id')->orderBy('name_en','ASC')->get(); // select => id , name_en , order by name_en DESC
        return view('products.create',compact('brands','subcategories'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $brands =  Brand::select('id','name_en')->orderBy('name_en','ASC')->get();
        $subcategories = DB::table('subcategories')->select('name_en','id')->orderBy('name_en','ASC')->get(); // select => id , name_en , order by name_en DESC
        return view('products.edit',compact('brands','subcategories','product'));
    }

    public function store(Request $request)
    {
        // validation
        $request->validate([
            "name_en" => ['required','string','between:2,512'],
            "name_ar" => ['required','string','between:2,512'],
            "code" => ['required','integer','unique:products,code'],
            "price" => ["required",'numeric','between:1,99999.99'],
            "quantity" => ["nullable",'integer','between:1,999'],
            "status" => ["nullable","in:0,1"],
            "brand_id" => ["nullable",'integer','exists:brands,id'],
            "subcategory_id" => ["required",'integer','exists:subcategories,id'],
            "details_en" => ['required','string'],
            "details_ar" => ['required','string'],
            "image" => ['required','mimes:png,jpeg,jpg','max:1024']
        ]);
        // upload image
        $newImageName = $request->file('image')->hashName();
        $request->file('image')->move(public_path('images\product'),$newImageName);
        $data = $request->except('_token','image');
        $data['image'] = $newImageName;
        // create into db
        Product::create($data);
        // return redirect to page with success message
        return redirect('dashboard/products')->with('success','Product Created Successfully');
    }
}
