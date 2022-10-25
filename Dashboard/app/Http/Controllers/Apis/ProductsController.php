<?php

namespace App\Http\Controllers\Apis;

use App\Models\Brand;
use App\Models\Product;
use App\Services\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductsController extends Controller
{
    public function index()
    {
       $products = Product::all();
       return response()->json(compact('products'));
    }

    public function create()
    {
        $brands =  Brand::select('id','name_en')->orderBy('name_en','ASC')->get();
        $subcategories = DB::table('subcategories')->select('name_en','id')->orderBy('name_en','ASC')->get(); // select => id , name_en , order by name_en DESC
        return response()->json(compact('brands','subcategories'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $brands =  Brand::select('id','name_en')->orderBy('name_en','ASC')->get();
        $subcategories = DB::table('subcategories')->select('name_en','id')->orderBy('name_en','ASC')->get(); // select => id , name_en , order by name_en DESC
        return response()->json(compact('product','brands','subcategories'));
    }

    public function store(StoreProductRequest $request)
    {
        // upload image
        $newImageName = Media::upload($request->file('image'),'product');
        $data = $request->except('_token','image');
        $data['image'] = $newImageName;
        // create into db
        Product::create($data);
        // return redirect to page with success message
        return response()->json(['message'=>'Product Created Successfully','status'=>true]);
    }

    public function update(UpdateProductRequest $request , $id)
    {
        $data = $request->except('_token','_method','image');
        $product = Product::findOrFail($id);
        if($request->hasFile('image')){
            // upload new image
            $newImageName = Media::upload($request->file('image'),'product');
            $data['image'] = $newImageName;
            // delete old image
            Media::delete(public_path('images\product\\'.$product->image));
        }
        $product->update($data);
        return redirect()->route('dashboard.products.index')->with('success','Product Updated Successfully');

    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        Media::delete(public_path('images\product\\'.$product->image));
        $product->delete();
        return redirect()->route('dashboard.products.index')->with('success','Product Deleted Successfully');
    }

}
