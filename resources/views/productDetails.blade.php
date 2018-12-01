@extends('template.base')

@section('title')
@endsection

@section('content')

<?php //require_once("config.php");
//if ($auth->estaLogueado()) {
  //$user = $db->traerPorMail($_SESSION["logueado"]);
//}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <!-- Header -->
    <?php //include('main-header.php') ?>
    <!-- --------------- -->

    <!-- Menu-Bar -->
    <?php //include('main-nav.php') ?>
    <!-- --------------- -->

    <!-- Contenido-->
    <section class="container">
      <article class="row">
        <article class="col-md-8">
          <article class="caption">
            <h6 class=descripcion>Turbo Ventilador Liliana VOTR18</h6>
          <article class="img-thumbnail">
            <img src="images/abanico_liliana.jpg" alt="Avanico Liliana" style="width:70%">
              </article>
          </article>
      </article>
      <article class="col-md-4">
        <article class="caption">
          <h3 class=precio align=center>$ 1.200</h3>
        </article>
        <article class="jumbotron">

            <article class="caption">
              <img src="images/icon-star.png" alt="Avanico Liliana" style="width:10%" class="likeStar">
            </article>
        </article>
        <article class="caption">
          <button type="button" class="btn btn-primary">COMPRAR</button>
        </article>
      </article>
      <br><br>
      <article class="col-md-12">
        <article class="img-thumbnail">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <br><br><br>
        </article>
      </article>
      </article>
    </section>
    <!-- --------------- -->

    <!-- Aside-Bar -->
    <?php //include('aside.php') ?>
    <!-- --------------- -->

    <!-- Header -->
    <?php //include('main-footer.php') ?>
    <!-- --------------- -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

@endsection
