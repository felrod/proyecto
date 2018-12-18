<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{

    public function index(Request $request)
    {
      switch ($request->orderBy){
        case 'categories':
          $order = 'category_id';
          break;
        case 'brands':
          $order = 'brand_id';
          break;
        case 'status':
          $order = 'status_id';
          break;
        default:
          $order = 'price';
          break;
      }
      $products = Product::orderBy($order)->paginate(20);
      return view('products.index')->with(compact('products'));
    }
    /**
  	* Show the form for creating a new resource.
  	*
  	* @return \Illuminate\Http\Response
  	*/

    public function create()
	{
		$brands = \App\Brand::all();
		$categories = \App\Category::all();
    $status = \App\Status::all();

		return view('products.create')->with(compact('brands', 'categories','status'));
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/

	public function store(ProductRequest $request)
	{
		$product = new Product;

		$this->storeAndUpdate($request, $product);

		return redirect('/products');
	}

	/**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function show($id)
	{
		$product = Product::find($id);

		return view('products.show')->with(compact('product'));
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		$product = Product::find($id);
		$brands = \App\Brand::all();
		$categories = \App\Category::all();
    $status = \App\Status::all();

		return view('products.edit')->with(compact('product', 'brands', 'categories','status'));
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function update(ProductRequest $request, $id)
	{
		$product = Product::find($id);

		$this->storeAndUpdate($request, $product);

		return redirect()->route('products.index');
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return \Illuminate\Http\Response
	*/
	public function destroy($id)
	{
		$product = Product::find($id);
		$product->delete();
		return redirect('/products');
	}

	public function api()
	{
		$products = Product::all();
		return $products;
	}

}
