<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('productAdd');
    }

    public function store(StoreProductRequest $request)
    {
        dd(request()->all());
    }


    public function show(Product $product)
    {
        return view('products');
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
