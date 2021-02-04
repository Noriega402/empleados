	//carga los datos de la tabla, son recividos aca por medio de mostrarDatos.php y luego los obtiene de 
	//mostrarDatos() en crud/crud.php
	function mostrar(){
		$.ajax({
			type:"POST",
			url:"procesos/mostrarDatos.php",
			success:function(result){
				$('#tablaDatos').html(result);//carga los datos en el div con id = tablaDatos
			}
		});
	} 

	//obtiene los datoa a actualizar
	//primero los manda a procesos/obtenerDatos.php
	//
	function obtenerDatos(id){
		$.ajax({
			type:"POST",
			data:"id=" + id,
			url:"procesos/obtenerDatos.php",
			success:function(result){
				//regresa los valores a actualizar
				//en vez de que retorne 1 o 0 la variable result,
				//retornara los valores para actualizar, en si, sobreescribira los datos.
				result=jQuery.parseJSON(result);
				$('#id').val(result['id']);
				$('#nombreu').val(result['nombre']);
				$('#sueldou').val(result['sueldo']);
				$('#edadu').val(result['edad']);
				$('#fechau').val(result['fRegistro']);
			}
		});
	}

	function actualizarDatos(){
		$.ajax({
			type:"POST",
			url:"procesos/actualizarDatos.php",//lleva los datos a procesos/insertarDatos.php
			data:$('#frminsertu').serialize(),
			success:function(result){
				//console.log(result); lo utlizo en caso de que me de error y quiera saber en donde fue.
				if (result==1){
					//$('#frminsert')[0].reset();//limpiar formulario
					mostrar();
					//swal("Actualizado","Registro actualizado con exito","success");
					swal({
						position: 'top-center',
						icon: 'success',
						title:'Actualizado',
						text: 'Registro actualizado',
						showConfirmButton: false,
						timer: 1500
					});
				}else{
					//swal("Error","Fallo al insertar","error");
					swal({
						position:'top-center',
						icon: 'error',
						title: '¡Error!',
						text:'Ups, ocurrio un error al actualizar',
						showConfirmButton: true,
						timer: 1500
					});
				}
				
			}
		});
		return false;
	}

	function eliminarDatos(id){
		swal({
			title: "¿Estas seguro de eliminar este registro?",
			text: "!Una vez eliminado no podra recuperarse¡",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					type:"POST",
					url:"procesos/eliminarDatos.php",//lleva los datos a procesos/insertarDatos.php
					data:"id=" +id,
					success:function(result){
						//console.log(result);  lo utlizo en caso de que me de error y quiera saber en donde fue.
						if (result==1){
							mostrar();
							//swal("Eliminado","Registro eliminado correctamente","info");
							swal("Eliminado","Registro eliminado correctamente","info");
						}else{
							swal("Error","Fallo borrar","error");
						}
				
					}
				});
			} 
		});
	}

	//obtiene los datos del modal y los manda a procesos/insertarDatos.php
	function insertarDatos(result){
		$.ajax({
			type:"POST",
			url:"procesos/insertarDatos.php",//lleva los datos a procesos/insertarDatos.php
			data:$('#frminsert').serialize(),
			success:function(result){
				//console.log(result);  //lo utlizo en caso de que me de error y quiera saber en donde fue.
				if (result==1){
					$('#frminsert')[0].reset();//limpiar formulario
					mostrar();
					swal("Insertado","Registro insertado correctamente","success");
					/*swal({
						position:'top-center',
						icon: 'success',
						title: '¡Insertado!',
						text:'Registro insertado correctamente',
						showConfirmButton: false,
						timer: 1500
					});*/
				}else{
					swal("Error","Fallo al insertar","error");
					/*swal.fire({
						position:'center',
						icon: 'error',
						title: '¡Error!',
						text:'Ups, ocurrio un error al Insertar',
						showConfirmButton: false,
						timer: 3000
					});*/
				}
				
			}
		});
		return false;
	}