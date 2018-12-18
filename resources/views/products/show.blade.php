@extends('template.base')

@section('title')
  
@section('content')
  <br>
    <div class="container" id="product-section">
       <div class="row">
        <div class="col-md-6">
          <img src="{{ Storage::url('products/' . $product->img) }}"/>
        </div>
        <div class="col-md-6">
          <div class="row">
       <div class="col-md-12">
        <h1>{{ $product->name }}</h1>
        <br>
        <p class="description">
         {{ $product->desc }}
        </p>
      </div>
      <div class="row">
     <div class="col-md-12  ">
      <h2 class="product-price">${{ $product->price }}</h2>
      <br>
      <button type="button" class="btn btn-primary">COMPRAR</button>
     </div>
    </div><!-- end row -->
        </div>
       </div><!-- end row -->
      </div><!-- end container -->
        <br>
@endsection
