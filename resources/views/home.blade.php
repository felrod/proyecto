@extends('template.base')

@section('title')
@endsection

@section('content')
<br>
<section class="container">
<div class="index-home">

<p style="text-align:center;">
<div style="text-align:center;" id="myCarousel" class="carousel slide" data-ride="carousel">

  <div style="text-align:center;" class="carousel-inner">
    <div style="text-align:center;" class="carousel-item active">
      <a href="hotsale.php" target="_blank">
          <img style="text-align:center;" class="d-block w-100" src="images/banner_hotsale.jpg" alt="First slide">
      </a>
    </div>
    <div class="carousel-item">
      <a href="ofertas.php" target="_blank">
          <img class="d-block w-100" src="images/banner_ofertas.jpg" alt="First slide">
      </a>
    </div>
    <div class="carousel-item">
      <a href="lonuevo.php" target="_blank">
          <img class="d-block w-100" src="images/banner_lonuevo.jpg" alt="First slide">
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
<a href="Producs.php" target="_blank">
<button type="button" class="btn btn-link">Todos los Productos</button>
</a>
<br>

<h2 class=titleHome align=center class="font-weight-bold">PRODUCTOS DESTACADOS</h2>

<br><br>
<section class="">

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-2">
  <div class="img-thumbnail">
    <a href="details.php" target="_blank">
      <img src="images/abanico_liliana.jpg" alt="Avanico Liliana" style="width:100%" align=center>
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
    <a href="/w3images/nature.jpg" target="_blank">
      <img src="images/tv.jpg" alt="Nature" style="width:100%" align=center>
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
    <a href="/w3images/fjords.jpg" target="_blank">
      <img src="images/cafetera_oster.jpg" alt="Fjords" style="width:100%" align=center>
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
    <a href="details.php" target="_blank">
      <img src="images/camara.jpg" alt="Camara Digital" style="width:100%" align=center>
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
    <a href="/w3images/nature.jpg" target="_blank">
      <img src="images/impresora.jpg" alt="Nature" style="width:100%" align=center>
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
    <a href="/w3images/fjords.jpg" target="_blank">
      <img src="images/microondas.jpg" alt="Microondas" style="width:100%" align=center>
      <div class="caption">
        <h3 class=precio align=center>$ 11.000</h3>
        <h6 class=descripcion align=center>Microondas Samsung 23 L MG23F3K3TAS Plata</h6>
      </div>
    </a>
  </div>
</div>
</div>
</div>
</section>




<br><br><br>
@endsection
