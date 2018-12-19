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
         <h1>@if ($product->status_id=='2')
           "En oferta"
         @elseif ($product->status_id=='3')
           "HotSale"
         @elseif ($product->status_id=='4')
           "Producto Nuevo "
         @endif</h1>
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
      <a href="#"><button type="button" class="btn btn-primary">Agregar a Carrito</button></a>
     </div>
    </div><!-- end row -->
        </div>
       </div><!-- end row -->
      </div><!-- end container -->
        <br>
@endsection
