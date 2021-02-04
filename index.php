<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="librerias/sweetalert/dist/sweetalert2.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

	<div class="container">
		<div class="row">
			<h2>Crud con PDO y MySQL</h2>
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a class="nav-link active" href="#">CRUD PDO</a>
							</li>
							<li>
								<a class="nav-link" href="#">Daniel</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<span class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">
									<i class="fas fa-plus-circle"></i> Nuevo registro
								</span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-12">
								<div id="tablaDatos"></div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<?php require_once "modalInsert.php" ?>
	<?php require_once "modalUpdate.php" ?>

	<script src="librerias/bootstrap4/jquery-3.4.1.min.js"></script>
	<script src="librerias/bootstrap4/popper.min.js"></script>
	<script src="librerias/bootstrap4/bootstrap.min.js"></script>
	<!--<script src="librerias/sweetalert/dist/sweetalert2.all.js"></script>-->
	<script src="librerias/sweetalert.min.js"></script>

	<script src="js/crud.js"></script>


	<script type="text/javascript">
		mostrar();
	</script>

</body>
</html>