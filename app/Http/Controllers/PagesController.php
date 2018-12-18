<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('home');
    }

    public function aboutus(){
      return view('aboutUs');
    }

    public function contacts(){
      return view('contacts');
    }

    public function cart(){
      return view('cart');
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

}
