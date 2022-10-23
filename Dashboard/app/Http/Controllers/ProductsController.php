<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
       $products = Product::all();
       return view('products.index',compact('products'));
    }

    public function create()
    {
        $brands = Brand::all(); // select => id , name_en , order by name_en DESC
        $subcategories = Subcategory::all(); // select => id , name_en , order by name_en DESC
        return view('products.create',compact('brands','subcategories'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $brands = Brand::all(); // select => id , name_en , order by name_en DESC
        $subcategories = Subcategory::all(); // select => id , name_en , order by name_en DESC
        return view('products.edit',compact('brands','subcategories','product'));
    }
}
