@extends('template.base')

@section('title')
Mi Perfil
@endsection

@section('content')
<?php

//require_once("config.php");
// if($auth->estaLogueado()==false){
// header("location:login.php");exit;
// }
// $user = $db->traerPorMail($_SESSION["logueado"]);

?>
    <div class="container-fluid">
      <div class="main row">
        <div class="col-md-3">
            <div class="perfilusuario">
                <div class="row">
                    <div class="col-md-8">
                      ¡Bienvenido {{Auth::user()->name}}!
                      <br>
                      <a href= "/editarperfil">Editar Perfil</a>
                    </div>
                    <div class="col-md-4">
                        <div class="imagenperfil" style="background-image: url('avatars/<?php // echo $user->getAvatar() ?>')"></div>
                    </div>
                </div>

            </div>
            <div class="opciones">
<!-- <img src="avatars/<?php //echo $user->getAvatar() ?>" width="100"> -->
                <div class="opcion">
                  <a href= "">Notificaciones</a>
                </div>
                <div class="opcion">
                  <a href= ""  id='changeProducts'>Mis Productos</a>
                </div>
                <div class="opcion">
                  <a href= "">Wish List</a>
                </div>
                <div class="opcion">
                  <a href= "">Carrito de Compras</a>
                </div>
                <div class="opcion">
                  <a href= "">Configuración</a>
                </div>

            </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-12" id='divnotif'>
              Notificaciones

          </div>
        </div>
      </div>
    </div>


@endsection

@section('moreCss')
<link rel="stylesheet" href={{ asset('/css/profile.css') }}>
@endsection
