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
// $usernameDefault = "";
// $nameDefault = "";
// $emailDefault = "";
//
// if ($_POST) {
// 	$errores = $validator->validarInformacion($_POST, $db);
//
// 	if (!isset($errores["username"])) {
// 		$usernameDefault = $_POST["username"];
// 	}
// 	if (!isset($errores["name"])) {
// 		$nameDefault = $_POST["name"];
// 	}
// 	if (!isset($errores["email"])) {
// 		$emailDefault = $_POST["email"];
// 	}
// 	if (count($errores) == 0) {
// 		$usuario = new User($_POST["username"], $_POST["name"], $_POST["email"], $_POST["password"],$_POST["country"]);
// 		$imageName = $usuario->guardarAvatar($_FILES, $usuario->getEmail());
// 		$usuario->setAvatar($imageName);
// 		$username = $db->guardarUsuario($usuario);
// 		header("location:signsuccess.php");exit;
// 		//header("Location:profile.php?username=" . $username->getUsername());exit;
// 	}
// }
 ?>
    <section class="container">
			<div class="row justify-content-center">
				<article class="col-md-5">
					<div class="auth-form-body mt-3">


					<h2 class= "row justify-content-center">Registrarse</h2>

						<br><br>

						<!-- <form action="signup.php" class="user-form" method="POST" enctype="multipart/form-data"> -->
            <form action="{{ route('register') }}" class="user-form" method="POST" enctype="multipart/form-data">

                @csrf


                <div class="form-group">
    							<label for="username">Nombre de usuario</label>
    							<input type="text" value="<?php // echo $usernameDefault?>" class="form-control" name="username">
    							<span style="color:red; font-size:12px;"> <?php // if(isset($errores["username"])){echo $errores["username"];}; ?> </span>
                  <div class="invalid-feedback"></div>
                  @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                </div>

    						<div class="form-group">
    							<label for="name">Nombre</label>
    							<input type="text" value="<?php // echo $nameDefault ?>" class="form-control" name="name">
    							<span style="color:red; font-size:12px;"> <?php // if(isset($errores["name"])){echo $errores["name"];} ; ?> </span>
                  <div class="invalid-feedback"></div>
    						</div>

    						<div class="form-group">
    							<label for="email">Correo electrónico</label>
    							<input type="email" value="<?php // echo $emailDefault ?>" class="form-control" name="email" placeholder="user@email.com">
    							<span style="color:red; font-size:12px;"> <?php // if(isset($errores["email"])){echo $errores["email"];} ; ?> </span>
                  <div class="invalid-feedback"></div>
    						</div>

    						<div class="form-group">
    							<label for="password">Contraseña</label>
    							<input type="password" class="form-control" name="password" value="<?php // echo ""; ?>">
    							<span style="color:red; font-size:12px;"> <?php // if(isset($errores["password"])){echo $errores["password"];} ; ?> </span>
                  <div class="invalid-feedback"></div>
    						</div>

    						<div class="form-group">
    							<label for="cpassword">Repite contraseña</label>
    							<input type="password" class="form-control" name="cpassword" value="<?php // echo ""; ?>">
    							<span style="color:red; font-size:12px;"> <?php // if(isset($errores["cpassword"])){echo $errores["cpassword"];} ; ?> </span>
                  <div class="invalid-feedback"></div>
    						</div>

    						<label for="">Imagen de perfil</label>

    							<div class="custom-file">
    								<input type="file" class="custom-file-input" accept="image/jpeg" name="userAvatar">
    							  <label class="custom-file-label" for="customFile">Elegir imagen</label>
    								<span style="color:red; font-size:12px;"> <?php // if(isset($errorAvatar)){echo $errorAvatar;} ; ?> </span>
    							</div>
    							<br><br>

                  <div class="form-group">
    							<label for="country">País de nacimiento</label>
    							<select class="form-control countries" name="country">
    								<option value="">Elegí tu país</option>
    								<!-- <option value="Argentina">Argentina</option>
    								<option value="Bolivia">Bolivia</option>
    								<option value="Brasil">Brasil</option>
    								<option value="Chile">Chile</option>
    								<option value="Colombia">Colombia</option>
    								<option value="Ecuador">Ecuador</option>
    								<option value="Paraguay">Paraguay</option>
    								<option value="Perú">Perú</option>
    								<option value="Uruguay">Uruguay</option>
    								<option value="Venezuela">Venezuela</option> -->
    							</select>
    							<div class="invalid-feedback"></div>
    						  </div>

                  <div id="fieldProvince" class=""></div>

    								<br><br>
                    <div class="">
    								<label><input id="check" type="checkbox"> Acepto los <a href= "/terms&conditions">términos y condiciones</a>.</label>
                    </div>
    								<br><br>

    							<div class="row justify-content-center">
    								<button type="submit" id= "submit" class="btn btn-primary btn-lg">Registrarse</button>
    								<br>
    							</div>
    						</form>

    					</div>
    				</article>
    			</div>
    		</section>
        <br>
    @endsection

    @section('custom-js')
    <script src={{ asset('/js/signUpValidator.js')}} ></script>
    <script src={{ asset('/js/api.js')}} ></script>
    @endsection
