<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.home',[
            'products' => Product::where('status',1)
                ->orderby('id','desc')
                ->take(5)
                ->get(),
        ]);
    }
    public function singleProduct($id)
    {
        $product = Product::find($id);
        $CatBrandWiseProduct = Product::where('category_name',$product->category_name)
            ->orwhere('brand_name',$product->brand_name)
            ->orderby('id','desc')
            ->get();
        return view('frontEnd.single-product.single-product',[
            'product' => $product,
            'CatBrandWiseProducts' => $CatBrandWiseProduct,
        ]);
    }
}
