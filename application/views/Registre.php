<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Registre/Login</title>
</head>
<body>
	
	<div class="container-fluid navbar-inverse text-center">
		
		<div class="row">
			
				
			<div class="col-md-4 col-md-offset-4">
				<h1  style="color:white;">EasyReplacementOnline</h1>
			</div>
			<div class="col-md-3 col-md-offset-9" style="margin-bottom:2%;">
					<?php echo form_open('ControllerERO/Login');	?>
					<input type="text" name="user" id="user" placeholder="Usuari..." class="form-control">
					<br>
					<input type="password" name="pass" id="pass" placeholder="Password..." class="form-control">
					<br>
					<input type="submit" name="ButLogin" id="ButLogin" value="Login" class="btn btn-success btn-block">
					<br>
					<?php echo form_close(); ?>
			</div>
		</div>
	</div>
		
		<?php echo form_open('ControllerERO/registrar'); ?>
	<div class="container text-center">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
					
					<h2>Registrar-se</h2>
					
					<label for="nom">Nom:*</label>
					<input type="text" name="nom" id="nom" class="form-control" >
					<label for="cognom">Cognom:</label>
					<input type="text" name="congnom" id="cognom" class="form-control">
					<label for="correu">Correu:*</label>
					<input type="email" name="correu" id="correu" class="form-control" >
					<label for="contrasenya">Contrasenya:*</label>
					<input type="password" name="contrasenya" id="contrasenya" class="form-control" >
					<label for="telefon">Telefon:</label>
					<input type="text" name="telefon" id="telefon" class="form-control">
					<label for="compte">Compte Bancari:*</label>
					<input type="text" name="compte" id="compte" class="form-control" >
					<label for="dir1">Direccio 1:*</label>
					<input type="text" name="dir1" id="dir1" class="form-control" >
					<label for="dir2">Direccio 2:</label>
					<input type="text" name="dir2" id="dir2" class="form-control">
					<br>
					<input type="submit" name="Registrar" id="Registrar" value="Registrar" class="btn btn-block btn-primary">
				

			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
</body>
</html>