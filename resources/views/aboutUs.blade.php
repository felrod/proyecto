@extends('template.base')

@section('title')
@endsection

@section('content')

<?php  //require_once("config.php");
//if ($auth->estaLogueado()) {
//  $user = $db->traerPorMail($_SESSION["logueado"]);
//}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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

    <!-- --------------- -->

    <!-- Aside-Bar -->
    <?php //include('aside.php') ?>
    <!-- --------------- -->

    <!-- Header -->
    <?php //include('main-footer.php') ?>
    <!-- --------------- -->

@endsection
