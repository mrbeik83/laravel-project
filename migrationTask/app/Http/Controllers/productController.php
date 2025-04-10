<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store(Request $request)
    {
        $data = $request->toArray();
        $pic = $request->file('picture')->getClientOriginalName();
        product::insertProduct($data,$pic);
        return redirect('/product/list');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.Create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function list(Request $request)
    {
        $pro =  product::all()->toArray();
        return view('product.list',compact('pro'));
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
    }
}
