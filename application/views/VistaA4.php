<!DOCTYPE html>
<html>
<head>
	<title>Vista</title>
</head>
<body>
<?php 
//Obrir Formulari
	echo form_open('ControladorA4/index'); //controlador/mètode

	//camp hidden
	echo form_hidden('usuari','viladoms');

	//camp input
	echo form_input('ciutat','sabadell');

	//textarea
	echo form_textarea('dades','Escriu el text...');

	//dropdown = select html
	$talles = array(
		's' => 'Talla Petita',
		'm' => 'Talla Mitjana',
		'l' => 'Talla Gran',
		'xl' => 'Talla Extra Gran'
	);

	echo form_dropdown('Samarreta',$talles,'1');

	//checkbox
	$data = array(
		'name' => 'nom',
		'value' => 'Viladoms',
		'checked' => TRUE
	);
	echo form_checkbox($data);

	//submit 
	echo form_submit('boto','Enviar');

	//tancar formulari
	echo form_close();
?>
</body>
</html>