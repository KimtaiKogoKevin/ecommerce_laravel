<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;


use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $product = Product::all();
       

        return view('admin.products.index')->withProduct($product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('admin.products.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validatedData = $this->validate($request, [
            'name'         => 'required|min:3|max:100',
            'description'   => 'required|min:3|max:255',
            'slug'          => 'required|min:3|max:255|unique:products',
            'category_id'   => 'required|numeric',
            'price' => 'required'
        ]);
    
        $validatedData['slug'] = Str::slug($validatedData['slug'], '-');
    
        Product::create($validatedData);
    
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
           
        return view('admin.products.show')->withProduct( $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        $categories = Category::with('children')->whereNull('parent_id')->get();
        
        return view('admin.products.edit',)->withProduct($product)->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
    

      $validatedData = $this->validate($request, [
        'name'         => 'required|min:3',
        'slug'          => 'required|min:3|max:255|unique:products,id,' . $product->slug,
      'category_id'   => 'required|numeric',
        'description'   => 'required|min:3',
         'price' => 'required'
        
      ]);
      $validatedData['slug'] = Str::slug($validatedData['slug'], '-');

      $product->update($validatedData);

      return redirect()->route('product.show', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
