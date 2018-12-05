@extends('template.base')

@section('title')
@endsection

@section('content')

<?php //require_once("config.php");
//if ($auth->estaLogueado()) {
//  $user = $db->traerPorMail($_SESSION["logueado"]);
//}
 ?>
    <!-- Contenido-->
    <section class="container">
      <div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Filtrar
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
    <p>Filtrar Busqueda</p>
    <div class="row">
      <div class="col-md-4">
        <div class="img-thumbnail">
          <a href="details.php" target="_blank">
            <img src="images/abanico_liliana.jpg" alt="Avanico Liliana" style="width:100%">
            <div class="caption">
              <h3 class=precio align=center>$ 1.200</h3>
              <h6 class=descripcion align=center>Turbo Ventilador Liliana VOTR18</h6>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="img-thumbnail">
          <a href="/w3images/nature.jpg" target="_blank">
            <img src="images/tv.jpg" alt="Nature" style="width:100%">
            <div class="caption">
              <h3 class=precio align=center>$ 14.000</h3>
              <h6 class=descripcion align=center>TV LED Philips 32 " HD 32PHG5101/77</h6>

            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="img-thumbnail">
          <a href="/w3images/fjords.jpg" target="_blank">
            <img src="images/cafetera_oster.jpg" alt="Fjords" style="width:100%">
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
      <div class="col-md-4">
        <div class="img-thumbnail">
          <a href="images/abanico_liliana.jpg" target="_blank">
            <img src="images/camara.jpg" alt="Avanico Liliana" style="width:100%">
            <div class="caption">
              <h3 class=precio align=center>$ 1.200</h3>
              <h6 class=descripcion align=center>Cámara Digital Sony DSC-H300 E33 Negra</h6>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="img-thumbnail">
          <a href="/w3images/nature.jpg" target="_blank">
            <img src="images/imac.jpg" alt="Nature" style="width:100%">
            <div class="caption">
              <h3 class=precio align=center>$ 14.000</h3>
              <h6 class=descripcion align=center>IMAC 21.5" MMQA2LE/A Intel Core i5</h6>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="img-thumbnail">
          <a href="/w3images/fjords.jpg" target="_blank">
            <img src="images/impresora.jpg" alt="Fjords" style="width:100%">
            <div class="caption">
              <h3 class=precio align=center>$ 11.000</h3>
              <h6 class=descripcion align=center>Impresora Multifunción Brother DCP-T500W</h6>
            </div>
          </a>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-4">
        <div class="img-thumbnail">
          <a href="images/abanico_liliana.jpg" target="_blank">
            <img src="images/procesadora.jpg" alt="Avanico Liliana" style="width:100%">
            <div class="caption">
              <h3 class=precio align=center>$ 1.200</h3>
              <h6 class=descripcion align=center>Procesadora Oster FPSTFP1355-354</h6>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="img-thumbnail">
          <a href="/w3images/nature.jpg" target="_blank">
            <img src="images/heladera.jpg" alt="Nature" style="width:100%">
            <div class="caption">
              <h3 class=precio align=center>$ 14.000</h3>
              <h6 class=descripcion align=center>Heladera No Frost GE Appliances RGE1436YGRX0</h6>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="img-thumbnail">
          <a href="/w3images/fjords.jpg" target="_blank">
            <img src="images/microondas.jpg" alt="Fjords" style="width:100%">
            <div class="caption">
              <h3 class=precio align=center>$ 11.000</h3>
              <h6 class=descripcion align=center>Microondas Samsung 23 L MG23F3K3TAS Plata</h6>
            </div>
          </a>
        </div>
      </div>
    </div>

  </section>
@endsection
