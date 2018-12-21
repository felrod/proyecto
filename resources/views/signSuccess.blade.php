@extends('template.base')

@section('title')
Registro Exitoso
@endsection

@section('content')
<?php
// require_once("config.php");
// if ($auth->estaLogueado()) {
// $user = $db->traerPorMail($_SESSION["logueado"]);
// }
?>

    <div class="col-md-12">

      <div class="mensajesuccess">
        <strong>Perfecto! </strong> Su registro fue satisfactorio.
      </div>

      <div class="imagensuccess">
        <img src="images/successwhite.jpg">
      </div>

      <div class="linksinicioperfil">
        <div class="row">
          <div class="col-md-6">
            <button type="button" class="btn btn-primary ml-auto login" data-toggle="modal" data-target="#myModal"><a href="index.php" style="color:white;">Inicio</a></button>
          </div>
          <div class="col-md-6">
            <button type="button" class="btn btn-primary ml-auto login" data-toggle="modal" data-target="#myModal"><a href="profile.php" style="color:white;">Perfil</a></button>
          </div>
        </div>
      </div>

    </div>
@endsection
