@extends('template.base')

@section('title')


@section('content')
<br>
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
<a href="products" target="_blank">
<button type="button" class="btn btn-link">Todos los Productos</button>
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
  <div class="row text-center">
    @forelse ($products as $oneProduct)
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">
        <img class="card-img-top" src="{{ Storage::url('products/' . $oneProduct->img) }}" alt="image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">$ {{ $oneProduct->price }}</h4>
          <p class="card-text">{{ $oneProduct->name }}</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Comprar</a>
          <a href="{{ route('products.show',$oneProduct->id)}}" class="btn btn-primary">Detalles</a>
        </div>
      </div>
    </div>
    @empty
    @endforelse
  </div>
  <!-- /.row -->
  <div class="pagination text-center">
    {{ $products->links() }}
  </div>
</div>

@endsection


<!-- <section class="">

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-2">
  <div class="img-thumbnail">
    <a href="{{asset('productdetail')}}" target="_blank">
      <img src="{{asset('images/product/abanico_liliana.jpg')}}" alt="Avanico Liliana" style="width:100%" align=center>
      <div class="caption">
        <h3 class=precio align=center>$ 1.200</h3>
        <h6 class=descripcion align=center>Turbo Ventilador Liliana VOTR18</h6>
      </div>
    </a>
  </div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
  <div class="img-thumbnail">
    <a href="{{asset('productdetail')}}" target="_blank">
      <img src="{{asset('images/product/tv.jpg')}}" alt="Nature" style="width:100%" align=center>
      <div class="caption">
        <h3 class=precio align=center>$ 14.000</h3>
        <h6 class=descripcion align=center>TV LED Philips 32 " HD 32PHG5101/77</h6>

      </div>
    </a>
  </div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
  <div class="img-thumbnail">
    <a href="{{asset('productdetail')}}" target="_blank">
      <img src="{{asset('images/product/cafetera_oster.jpg')}}" alt="Fjords" style="width:100%" align=center>
      <div class="caption">
        <h3 class=precio align=center>$ 11.000</h3>
        <h6 class=descripcion align=center>Cafetera Oster BVSTECMP55-054</h6>
      </div>
    </a>
  </div>
</div>
</div>
<br>

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-2">
  <div class="img-thumbnail">
    <a href="{{asset('productdetail')}}" target="_blank">
      <img src="{{asset('images/product/camara.jpg')}}" alt="Camara Digital" style="width:100%" align=center>
      <div class="caption">
        <h3 class=precio align=center>$ 1.200</h3>
        <h6 class=descripcion align=center>Cámara Digital Sony DSC-H300 E33 Negra</h6>
      </div>
    </a>
  </div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
  <div class="img-thumbnail">
    <a href="{{asset('productdetail')}}" target="_blank">
      <img src="{{asset('images/product/impresora.jpg')}}" alt="Nature" style="width:100%" align=center>
      <div class="caption">
        <h3 class=precio align=center>$ 11.000</h3>
        <h6 class=descripcion align=center>Impresora Multifunción Brother DCP-T500W</h6>

      </div>
    </a>
  </div>
</div>
<div class="col-md-1"></div>
<div class="col-md-2">
  <div class="img-thumbnail">
    <a href="{{asset('productdetail')}}" target="_blank">
      <img src="{{asset('images/product/microondas.jpg')}}" alt="Microondas" style="width:100%" align=center>
      <div class="caption">
        <h3 class=precio align=center>$ 11.000</h3>
        <h6 class=descripcion align=center>Microondas Samsung 23 L MG23F3K3TAS Plata</h6>
      </div>
    </a>
  </div>
</div>
</div>
</div>
</section> -->
<!--
<br><br><br>
@endsection -->
