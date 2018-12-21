<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use App\Status;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;
use Cookie;
use Session;
use App\Cart;

class ProductsController extends Controller
{

  public function __construct()
  {
    if (Auth::check()) {

      $this->middleware('auth');

    } else {

    }
  }

    public function storeAndUpdate($request, $product)
    {
      $product->name = $request->input('name');
      $product->price = $request->input('price');
      $product->desc = $request->input('desc');
      $product->category_id = $request->input('category_id');
      $product->brand_id = $request->input('brand_id');
      $product->status_id = $request->input('status_id');

      // Traemos todo el objeto de imagen
      $productImage = $request->file('image');

      // Armo un nombre único para este archivo
      $imageName = uniqid("product_img_") . "." . $productImage->extension();

      // Subo el archivo de imagen
      $productImage->storePubliclyAs("public/products", $imageName);

      // Lo guardamos en base de datos
      $product->image = $imageName;
      $product->save();
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

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
		$brands = Brand::all();
		$categories = Category::all();
    $status = Status::all();

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
    dd("hola");
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
		$brands = Brand::all();
		$categories = Category::all();
    $status = Status::all();

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

		return redirect()->route('products');
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

  // public function addCart()
  // {
  //   // $product = Product::find($id);
  //   // $oldCart = Session::has('cart')?Session::get('cart'):null;
  //   // $cart = new Cart($oldCart);
  //   // $cart->add($product,$product->id);
  //   // $request->session()->put('cart',$cart);
  //   // return redirect()->route('product.index');
  //
  //   $products=[];
  //    if (isset($_COOKIE['carrito'])) {
  //      $cookie=   json_decode($_COOKIE['carrito']);
  //      foreach ($cookie->productos as $key=>$value) {
  //       // var_dump($value);
  //       array_push($products, Product::find($value));
  //     }
  //    }
  //    return view('cart')->with(compact('products'));
  // }

  public function addToCart(Request $req ,$id){
     $product = Product::find($id);
    $oldcart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldcart);
      $cart->add($product, $product->id);

      $req->session()->put('cart',$cart);


      return redirect('products');
 }

  public function removefromcart(Request $req, $id)
  {       $product = Product::find($id);
    $oldcart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldcart);
      unset($cart->items[$id]);

   $cart->remove($product, $product->id);
       Session::put('cart', $cart);
       return back();
  }
  public function Cart(){
    $product = Product::all();
      if(!Session::has('cart') ){
          return view('shoppingCart');

      }
       $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
       return view('shoppingCart',['products'=> $cart->items, 'totalPrice'=>  $cart->totalPrice]);
  }

  public function checkout(){
        $product = Product::all();
        if(!Session::has('cart') ){
          return view('shoppingCart');
      }
      Session::forget('cart');
      return redirect('/products');

  }

  public function findProduct(Request $request){

    $find = $request->input('search');
    $prodructsFind = Product::where('name', 'like', '%'. $find .'%')->paginate(10);
    return view('products.search')->with(compact('productsFind','find'));
  }

}
