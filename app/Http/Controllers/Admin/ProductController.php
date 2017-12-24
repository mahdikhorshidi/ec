<?php

namespace App\Http\Controllers\Admin;

use mahdikhorshidi\products\Models\Product;
use mahdikhorshidi\categories\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        //$cat = new Category();
        //$cat->name = "آموزش ها";
        //Category::find('2')->appendNode($cat);

        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = 'barname_' . $request->bar_id . '_' . time() . '.' . $request->image->getClientOriginalExtension();
            Image::make($file)->save(public_path('/uploads/images/' . $imageName));
            $request->merge(['scan' => $imageName]);
        }
        //$product = Product::create($request->all());
        $product = Product::find('1');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
