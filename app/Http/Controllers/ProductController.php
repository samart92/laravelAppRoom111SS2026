<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $products=Product::all();
    return view('product.index',[
        'products'=>$products
    ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        Product::create([
            'name'=>$request->proName,
            'detail'=>$request->proDetail,
            'price'=>$request->proPrice,
            'image'=>$request->proimage,
        ]);

        return redirect()->route('product.index');//return to home page
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

            $product->name=$request->proName;
            $product->detail=$request->proDetail;
            $product->price=$request->proPrice;
            $product->image=$request->proimage;
            $product->save();

            return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
        $product->delete();
        return redirect()->route('product.index');
    }
}
