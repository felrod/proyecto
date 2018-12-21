@extends('template.base')

@section('title')
Nosotros
@endsection

@section('content')

<?php  //require_once("config.php");
//if ($auth->estaLogueado()) {
//  $user = $db->traerPorMail($_SESSION["logueado"]);
//}
 ?>
<div class="container-fluid">
  <div class="nosotros">
    <h1>¿Quiénes somos?</h1>
    <div class="text">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="main row">
      <div class="col-md-6">
        <h4>Venta telefónica</h4>
        0810 333 8700
        <br>
        Lunes-Viernes de 08:00 a 20:00 / Sábado-Domingo 09:00 a 21:00
      </div>
      <div class="col-md-6">
        <h4>Atención al cliente</h4>
        0810 999 3728
        <br>
        Lunes-Sábado de 10:00 a 19:00
      </div>
    </div>
  </div>
</div>
@endsection
@section('moreCss')
<link rel="stylesheet" href={{ asset('/css/aboutUs.css') }}>
@endsection
