<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.product.add-product');
    }
    public function manageProduct()
    {
        return view('admin.product.manage-product',[
            'products' => Product::all(),
        ]);
    }
    public function saveProduct(Request $request)
    {
        Product::saveProduct($request);
        return redirect(route('manage.product'))->with('message','Saved Successfully');
    }
    public function status($id)
    {
        Product::status($id);
        return back();
    }
    public function editProduct($id)
    {
        return view('admin.product.edit-product',[
            'product' => Product::find($id),
        ]);
    }
    public function updateProduct(Request $request)
    {
        Product::updateProduct($request);
        return redirect(route('manage.product'))->with('message','Update Successfully');
    }
    public function deleteProduct(Request $request)
    {
        Product::deleteProduct($request);
        return back()->with('message','Delete Successfully');
    }
}
