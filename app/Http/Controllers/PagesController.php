<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class PagesController extends Controller
{
    public function home(){
      $hot = \App\Product::where('status_id','=','2')->orderBy('created_at','desc')->limit(4)->get();
      $new = \App\Product::where('status_id','=','3')->orderBy('created_at','desc')->limit(4)->get();
      $off = \App\Product::where('status_id','=','4')->orderBy('created_at','desc')->limit(4)->get();
      return view('home')->with(compact('hot','new','off'));
    }

    public function aboutus(){
      return view('aboutUs');
    }

    public function contacts(){
      return view('contacts');
    }

    public function profile(){
      return view('profile');
    }

    public function editProfile(){
      return view('editProfile');
    }

    public function news(){
      $products = \App\Product::where('status_id', 4)->get();
      return view('status.news')->with(compact('products'));
    }

    public function offers(){
      $products = \App\Product::where('status_id', 2)->get();
      return view('status.offers')->with(compact('products'));
    }

    public function hotSales(){
      $products = \App\Product::where('status_id', 3)->get();
      return view('status.hotSales')->with(compact('products'));
    }

    public function termsConditions(){
      return view('terms&conditions');
    }

    public function faq(){
      return view('Faq');
    }

    public function signSuccess(){
      return view('signSuccess');
    }

    public function login(){
      return view('login');
    }

    public function signUp(){
      return view('signUp');
    }

    public function offices(){
      return view('offices');
    }

    public function catCelulares(){
      $products = \App\Product::where('category_id', 1)->get();
      return view('categories.celulares')->with(compact('products'));
    }

    public function catAire(){
      $products = \App\Product::where('category_id', 2)->get();
      return view('categories.airesycalefaccion')->with(compact('products'));
    }

    public function catCamaras(){
      $products = \App\Product::where('category_id', 3)->get();
      return view('categories.camaras')->with(compact('products'));
    }

    public function catCocina(){
      $products = \App\Product::where('category_id', 4)->get();
      return view('categories.cocina')->with(compact('products'));
    }

    public function catOficina(){
      $products = \App\Product::where('category_id', 5)->get();
      return view('categories.oficina')->with(compact('products'));
    }

    public function catInformatica(){
      $products = \App\Product::where('category_id', 6)->get();
      return view('categories.informatica')->with(compact('products'));
    }

    public function catLavado(){
      $products = \App\Product::where('category_id', 7)->get();
      return view('categories.lavado')->with(compact('products'));
    }

    public function catGaming(){
      $products = \App\Product::where('category_id', 8)->get();
      return view('categories.gaming')->with(compact('products'));
    }

    public function catTv(){
      $products = \App\Product::where('category_id', 9)->get();
      return view('categories.tv')->with(compact('products'));
    }

}
