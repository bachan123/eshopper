<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('backend.add-product');
    }

    public function addProduct(Request $request)
    {
        $product_name        = $request->get('product_name');
        $product_description = $request->get('product_description');
        $product_size        = $request->get('product_size');
        $product_category    = $request->get('product_category');
        $product_price       = $request->get('product_price');
        $product_image       = $request->file('product_image')->getClientOriginalName();
        $request->product_image->move(public_path('images'), $product_image);

        $products = new Product();

        $products->product_name        = $product_name;
        $products->product_description = $product_description;
        $products->product_size        = $product_size;
        $products->product_category    = $product_category;
        $products->product_price       = $product_price;
        $products->product_image       = $product_image;

        $products->save();

        return redirect('product-list');
    }

    public function getProduct()
    {
        $product_data = Product::all();
        return view('backend.product-list', ['data'=>$product_data]);
    }
}
