<?php 
	require_once "../crud/crud.php";

	//guardamos los datos que vienen desde js/crud.js->insertarDatos()
	$datos = array('nombre' => $_REQUEST['nombre'],
					'sueldo' => $_REQUEST['sueldo'],
					'edad' => $_REQUEST['edad'],
					'fecha' => $_REQUEST['fecha'], );

	echo Crud::insertarDatos($datos);
?>