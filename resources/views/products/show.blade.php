@extends('template.base')

@section('title')
Detalle
@endsection

@section('content')
  <div class="">
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
        {{-- <a class="buttonCarrito" data-id="{{ $product->id}}" data-name="{{ $product->name}}" href="/cart"> --}}
        <a href="{{route('addtocart' ,['id' => $product->id])}}">

          <button type="button" class="btn btn-success">Agregar a Carrito</button></a>
        @guest

          <a href="{{ URL::previous() }}" class="btn btn-secondary" style="width: 78px;">Volver</a>

          	@else

          		@if (Auth::user()->admin)

          			<a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning" style="width: 78px;">Edit</a>

          			<form action="/products/{{ $product->id }}" method="post" style="display: inline-block;" style="width: 78px;">
          				@csrf
          				{{ method_field('DELETE') }}
          				<button id="delete" type="submit" class="btn btn-danger">Delete</button>
          			</form>

          			@endif

          			<a href="{{ URL::previous() }}" class="btn btn-primary" style="width: 78px;">Volver</a>

          @endguest
       </div>
      </div><!-- end row -->
          </div>
         </div><!-- end row -->
        </div><!-- end container -->
          <br>
  </div>
</div>

@endsection
