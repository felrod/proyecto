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
 <body>
    <section class="container">
			<div class="row justify-content-center">
				<article class="col-md-5">
					<div class="auth-form-body mt-3">


					<h2 class= "row justify-content-center">Registrate!</h2>

						<br><br>

						<form action="signup.php" method="POST" enctype="multipart/form-data">

						<div class="form-group">
							<label for="">Nombre de usuario:</label>
							<input type="text" value="<?php // echo $usernameDefault?>" class="form-control" name="username">
							<span style="color:red; font-size:12px;"> <?php // if(isset($errores["username"])){echo $errores["username"];}; ?> </span>
						</div>

						<div class="form-group">
							<label for="">Nombre:</label>
							<input type="text" value="<?php // echo $nameDefault ?>" class="form-control" name="name">
							<span style="color:red; font-size:12px;"> <?php // if(isset($errores["name"])){echo $errores["name"];} ; ?> </span>
						</div>

						<div class="form-group">
							<label for="">Correo electrónico:</label>
							<input type="email" value="<?php // echo $emailDefault ?>" class="form-control" name="email" placeholder="user@email.com">
							<span style="color:red; font-size:12px;"> <?php // if(isset($errores["email"])){echo $errores["email"];} ; ?> </span>
						</div>

						<div class="form-group">
							<label for="">Contraseña:</label>
							<input type="password" class="form-control" name="password" value="<?php // echo ""; ?>">
							<span style="color:red; font-size:12px;"> <?php // if(isset($errores["password"])){echo $errores["password"];} ; ?> </span>
						</div>

						<div class="form-group">
							<label for="">Repite contraseña:</label>
							<input type="password" class="form-control" name="cpassword" value="<?php // echo ""; ?>">
							<span style="color:red; font-size:12px;"> <?php // if(isset($errores["cpassword"])){echo $errores["cpassword"];} ; ?> </span>
							<br>
						</div>

						<label for="">Imagen de perfil: </label>

							<div class="custom-file">
								<input type="file" class="custom-file-input" accept="image/jpeg" name="userAvatar">
							  <label class="custom-file-label" for="customFile">Elegir imagen</label>
								<span style="color:red; font-size:12px;"> <?php // if(isset($errorAvatar)){echo $errorAvatar;} ; ?> </span>
							</div>
							<br><br>

							<label>País:</label>
								<select name="country" class="custom-select">
									<option>Argentina</option>
									<option>Bolivia</option>
									<option>Brasil</option>
									<option>Colombia</option>
									<option>Chile</option>
									<option>Ecuador</option>
									<option>Paraguay</option>
									<option>Perú</option>
									<option>Uruguay</option>
									<option>Venezuela</option>
								</select>

								<br><br>
								<label><input type="checkbox"> Acepto los <a href= "terminosycondiciones.php">términos y condiciones</a>.</label>
								<br><br>

							<div class="row justify-content-center">
								<button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
								<br>
							</div>

						</form>
					</div>
				</article>
			</div>
		</section>
    <br>
  </body>


@endsection
