@extends('template.base')

@section('title')
@endsection

@section('content')

<?php
// require_once("config.php");
// if($auth->estaLogueado()){
//   header("location:index.php");exit;
//   $user = $db->traerPorMail($_SESSION["logueado"]);
// }
//
// $errores = [];
// if ($_POST) {
//   $errores = $validator->validarLogin($_POST,$db);
//   if (count($errores) == 0) {
//     // LOGUEAR
//         $auth->loguear($_POST["email"]);
//     if (isset($_POST["recordame"])) {
//       //Quiere que lo recuerde
//       $auth->recordame($_POST["email"]);
//     }
//         header("Location:profile.php");
//   }
// }
//
// if (!empty($_POST["remember"])) {
//   setcookie ("email",$_POST["email"],time()+(10*365*24*60*60));
//   setcookie ("password",$_POST["password"],time()+(10*365*24*60*60));
// }
?>
  <section class="container">
    <div class="row justify-content-center">
      <article class="col-md-5">
        <div class="auth-form-body mt-3">
          <h2 class= "row justify-content-center">Iniciar Sesión</h2>

            <br><br>

          <form action="login.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label for="">Nombre de usuario / Email:</label>
              <input type="text" value="<?php //  if(isset($_COOKIE["email"])) ?>" class="form-control" name="email">
              <span style="color:red; font-size:12px;"> <?php // if(isset($errores["mail"])){echo $errores["mail"];} ?> </span>
            </div>

            <div class="form-group">
              <label for="">Contraseña:</label>
              <input type="password" class="form-control" name="password" value="<?php // if(isset($_COOKIE["password"])) ?>">
              <span style="color:red; font-size:12px;"> <?php // if(isset($errores["password"])){echo $errores["password"];} ?> </span>
            </div>

            <a href= "">¿Ha olvidado su contraseña?</a>
            <br><br>
            <label><input type="checkbox" name="remember"> Mantener mi sesión iniciada.</label>

            <br><br>

            <div class="row justify-content-center">
              <button type="submit" class="btn btn-primary btn-lg">Iniciar Sesión</button>

            </div>
          </form>
        </div>
      </article>
    </div>
  </section>
  <br>
@endsection
