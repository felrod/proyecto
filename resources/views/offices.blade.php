@extends('template.base')

@section('title')
Sucursales
@endsection

@section('content')
<?php
// require_once("config.php");
// if ($auth->estaLogueado()) {
// $user = $db->traerPorMail($_SESSION["logueado"]);
// }
?>
<div class="container-fluid">
  <div class="sucursales">
    <h1>Sucursales</h1>
    <div class="main row">
      <div class="col-md-8">
        <div class="divmapa" id="lima">
          <!-- <img src="images/offices/lima.jpg" width="100%" id="lima"> -->
        </div>
        <div class=""> </div>
      </div>
      <div class="col-md-4">
        <div class="sedes">
            <br>
            <h2>Sede Lima</h2>
            Lima 1111
            <br>
            +54 11 5263-7400
            <br>
            9:00 a 20:00 hs
        </div>
        <div class="row justify-content-center">
          <button type="button" name="button" class='btn btn-danger' onclick="cambiar();">Cambiar Sede</button>
        </div>
        <br>
        <div class="sedes">
            <br>
            <h2>Sede Monroe</h2>
            Monroe 860
            <br>
            +54 11 5263-7400
            <br>
            9:00 a 20:00 hs
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('custom-js')
<script src={{ asset('/js/offices.js')}} ></script>
@endsection

@section('moreCss')
<link rel="stylesheet" href={{ asset('/css/offices.css') }}>
@endsection
