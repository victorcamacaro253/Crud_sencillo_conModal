<!DOCTYPE html>
<html>
<head>
	<title>CRUD Seguro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/fontawesome.css">
	<script type="text/javascript" src="vanilla-dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="vanilla-dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<style type="text/css">
		.container{
			margin-top: 6em;
			
		}
	</style>
	<script type="text/javascript" src="funciones2.js"></script>
	
</head>
<body  style="background-color: #017ea1">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<div class="card bg-light mb-3">
					<div class="card-header">
						<li class="fa fa-lock"></li>
						<strong>Consulta segura de php a mysql</strong>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<section class="text-right">
									<span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalinsertar">
									<i class="fa fa-plus-circle"></i> Agregar nuevo
								</span>
								</section>
								<div id="tablaDatos"></div>
						</div>
					</div>
				</div>
					<div class="card-footer text-muted text-right" style="text-align: right;">
						Victor camacaro
					</div>
				</div>


			</div>
		</div>
	</div>


<div class="modal fade" id="modalinsertar" tabindex="-1" role="dialog" aria-labelledby="examplemodallabel" aria-hidden="true">
   	<div class="modal-dialog modal-sm" role="document">
   		<div class="modal-content">
   			<div class="modal-header">
   				<h5 class="modal-title" id="examplemodallabel">Insertar datos</h5>
   				<button type="button" class="close" data-dismiss="modal" aria-label="close">
   					<span aria-hidden="true">&times;</span>
   				</button>
   			</div>
   			<div class="modal-body">
   				<form id="frmagregardatos" method="POST">
   				<label>Nombre</label>
	   				<input type="text" id="nombre" name="nombre" class="form-control form-control-sm">
	   				<label>Apellido paterno</label>
	   				<input type="text" id="paterno" name="paterno" class="form-control form-control-sm">
	   				<label>Apellido materno</label>
	   				<input type="text" id="materno" name="materno" class="form-control form-control-sm">
	   				<label>Telefono</label>
	   				<input type="text" id="telefono" name="telefono" class="form-control form-control-sm">
   			</form>
   			</div>
   			<div class="modal-footer">
   				<button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
  <button type="button" class="btn btn-primary" id="btnguardardatos" onclick="agregardatos()">Guardar</button>
   			</div>
   		</div>
   	</div>
   </div>

   <div class="modal fade" id="modalactualizar" tabindex="-1" role="dialog" aria-labelledby="examplemodallabel" aria-hidden="true">
   	<div class="modal-dialog modal-sm" role="document">
   		<div class="modal-content">
   			<div class="modal-header">
   				<h5 class="modal-title" id="examplemodallabel">Actualizar</h5>
   				<button type="button" class="close" data-dismiss="modal" aria-label="close">
   					<span aria-hidden="true">&times;</span>
   				</button>
   			</div>
   			<div class="modal-body">
   				<form id="frmagregardatosu">
   					<input type="text" id="idu" name="idu" hidden="">
   				<label>Nombre</label>
	   				<input type="text" id="nombreu" name="nombreu" class="form-control form-control-sm">
	   				<label>Apellido paterno</label>
	   				<input type="text" id="paternou" name="paternou" class="form-control form-control-sm">
	   				<label>Apellido materno</label>
	   				<input type="text" id="maternou" name="maternou" class="form-control form-control-sm">
	   				<label>Telefono</label>
	   				<input type="text" id="telefonou" name="telefonou" class="form-control form-control-sm">
   			</form>
   			</div>
   			<div class="modal-footer">
   				<button type="button" class="btn btn-secondary" data-dismiss="modal" >cerrar</button>
   				<button type="button" class="btn btn-warning" data-dismiss="modal" onclick="actualizardatos()">actualizar</button>
   			</div>
   		</div>
   	</div>
   </div>




<script type="text/javascript">
  	$(document).ready(function(){

  		mostrarDatos();
  	})


  </script>

</body>
</html>