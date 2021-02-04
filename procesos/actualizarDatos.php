<?php 
	require_once "../crud/crud.php";

	//guardamos los datos que vienen desde js/crud.js->insertarDatos()
	$datos = array('nombre' => $_REQUEST['nombreu'],
					'sueldo' => $_REQUEST['sueldou'],
					'edad' => $_REQUEST['edadu'],
					'fecha' => $_REQUEST['fechau'],
					'id' => $_REQUEST['id'] );

	echo Crud::actualizarDatos($datos);
?>