<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.listAllCategory');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('store function run');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        dd('update function running');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
         dd('destroy function running');
    }
}
