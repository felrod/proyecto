@extends('template.base')

@section('title','DH-electronics - Home')


@section('content')
<section class="container">
<div class="index-home">

<p style="text-align:center;">
<div style="text-align:center;" id="myCarousel" class="carousel slide" data-ride="carousel">

  <div style="text-align:center;" class="carousel-inner">
    <div style="text-align:center;" class="carousel-item active">
      <a href="{{asset('hotsales')}}" target="_blank">
          <img style="text-align:center;" class="d-block w-100" src="{{asset('images/banner_hotsale.jpg')}}" alt="First slide">
      </a>
    </div>
    <div class="carousel-item">
      <a href="{{asset('offers')}}" target="_blank">
          <img class="d-block w-100" src="{{asset('images/banner_ofertas.jpg')}}" alt="First slide">
      </a>
    </div>
    <div class="carousel-item">
      <a href="{{asset('news')}}" target="_blank">
          <img class="d-block w-100" src="{{asset('images/banner_lonuevo.jpg')}}" alt="First slide">
      </a>
    </div>
  </div>

  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
</div>

</p>

</section>
<br>
  <a href="/products" >
<button type="button" class="btn btn-success boton"><h4>Todos los Productos</h4></button>
</a>
<br>

<h2 class=titleHome align=center class="font-weight-bold">PRODUCTOS DESTACADOS</h2>

<br><br>

<br>
<!-- <a href="/products?orderBy=categories">Category</a>
<a href="/products?orderBy=brands">Brand</a>
<a href="/products?orderBy=status">Status</a>
<a href="/products">Price</a>
<br> -->
<div class="container">
  <!-- Page Features -->
  <h3>Productos en HotSales</h3>
  <div class="row text-center">
    @forelse ($hot as $oneProduct)
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top" src="{{ Storage::url('products/' . $oneProduct->img) }}" alt="image" style="width:100%">
        @if ($oneProduct->status_id=='2')
          <img src="/images/offer.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
        @elseif ($oneProduct->status_id=='3')
          <img src="/images/hot.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
        @elseif ($oneProduct->status_id=='4')
          <img src="/images/new.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
        @endif
        <div class="card-body">
          <h4 class="card-title">$ {{ $oneProduct->price }}</h4>
          <p class="card-text">{{ $oneProduct->name }}</p>
        </div>
        <div class="card-footer">
          {{-- <a href="#" class="btn btn-primary">Comprar</a> --}}
          <a href="{{ route('products.show',$oneProduct->id)}}" class="btn btn-danger">Detalles</a>
        </div>
      </div>
    </div>
    @empty
    @endforelse
  </div>
  <h3>Productos Nuevos</h3>
  <div class="row text-center">
    @forelse ($new as $oneProduct)
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top" src="{{ Storage::url('products/' . $oneProduct->img) }}" alt="image" style="width:100%">
        @if ($oneProduct->status_id=='2')
          <img src="/images/offer.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
        @elseif ($oneProduct->status_id=='3')
          <img src="/images/hot.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
        @elseif ($oneProduct->status_id=='4')
          <img src="/images/new.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
        @endif
        <div class="card-body">
          <h4 class="card-title">$ {{ $oneProduct->price }}</h4>
          <p class="card-text">{{ $oneProduct->name }}</p>
        </div>
        <div class="card-footer">
          {{-- <a href="#" class="btn btn-primary">Comprar</a> --}}
          <a href="{{ route('products.show',$oneProduct->id)}}" class="btn btn-danger">Detalles</a>
        </div>
      </div>
    </div>
    @empty
    @endforelse
  </div>
  <h3>Productos en Ofertas</h3>
  <div class="row text-center">
    @forelse ($off as $oneProduct)
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top" src="{{ Storage::url('products/' . $oneProduct->img) }}" alt="image" style="width:100%">
        @if ($oneProduct->status_id=='2')
          <img src="/images/offer.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
        @elseif ($oneProduct->status_id=='3')
          <img src="/images/hot.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
        @elseif ($oneProduct->status_id=='4')
          <img src="/images/new.png" alt="" style="position:absolute; top:0 ; left:0; width:70px;">
        @endif
        <div class="card-body">
          <h4 class="card-title">$ {{ $oneProduct->price }}</h4>
          <p class="card-text">{{ $oneProduct->name }}</p>
        </div>
        <div class="card-footer">
          {{-- <a href="#" class="btn btn-primary">Comprar</a> --}}
          <a href="{{ route('products.show',$oneProduct->id)}}" class="btn btn-danger">Detalles</a>
        </div>
      </div>
    </div>
    @empty
    @endforelse
  </div>
  <!-- /.row -->
</div>
@endsection
