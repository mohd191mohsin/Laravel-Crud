<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view("product/index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "Product_name"=>"required",
            "brand"=> "nullable",
            "category"=> "nullable",
            "description"=> "nullable",
            "price"=> "required|numeric",
        ]);
        $product = new Products();
        $product->Product_name = $request->Product_name;
        $product->brand = $request->brand;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect()->route("product.index")->with("success","Product Add SuccessFully !!!");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $product = Products::findOrFail($id);
        $product->Product_name = $request->Product_name;
        $product->brand = $request->brand;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect()->route("product.index")->with("success","Product update SuccessFully !!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route("product.index")->with("success","Product Delete SuccessFully !!!");
    }
}
