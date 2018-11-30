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
      return view('news');
    }

    public function offers(){
      return view('offers');
    }

    public function hotSales(){
      return view('hotSales');
    }

    public function termsConditions(){
      return view('termsConditions');
    }

    public function faq(){
      return view('faq');
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

    public function products(){
      return view('products');
    }

    public function productDetails(){
      return view('productDetails');
    }

}