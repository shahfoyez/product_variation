<?php

namespace App\Http\Controllers;

use App\Models\BundleProduct;
use App\Http\Requests\StoreBundleProductRequest;
use App\Http\Requests\UpdateBundleProductRequest;

class BundleProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBundleProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBundleProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BundleProduct  $bundleProduct
     * @return \Illuminate\Http\Response
     */
    public function show(BundleProduct $bundleProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BundleProduct  $bundleProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(BundleProduct $bundleProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBundleProductRequest  $request
     * @param  \App\Models\BundleProduct  $bundleProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBundleProductRequest $request, BundleProduct $bundleProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BundleProduct  $bundleProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(BundleProduct $bundleProduct)
    {
        //
    }
}
