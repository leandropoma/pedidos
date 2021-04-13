<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/bootstrap-4.6/css/bootstrap.css">
	<title>Pedidos</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<h3 class="text-center">FORMULARIO DE PEDIDOS</h3>
			</div>
			<div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-4">
				<form class="was-validated mx-auto p-2 p-md-3 p-lg-4 border border-white shadow" action="procesa.php" method="GET" accept-charset="UTF-8" id="form-procesa">
					<div class="custom-control p-0 mb-3">
						<label class="" for="nrotel">Número teléfono</label>
						<input type="text" class="form-control is-invalid" name="nrotel" id="nrotel" required placeholder="Ej: 77665544">
					</div>
					<div class="custom-control p-0 mb-3">
						<label class="" for="carnet">Carnet</label>
						<input type="text" class="form-control is-invalid" name="carnet" id="carnet" required placeholder="Ej: 123456">
					</div>
					<div class="custom-control p-0 mb-3">
						<label class="" for="nombres">Nombre Completo</label>
						<input type="text" class="form-control is-invalid" name="nombres" id="nombres" required placeholder="Ej: Juan Perez Perez">
					</div>
					<div class="custom-control p-0 mb-3">
						<label class="" for="pedido">Producto</label>
						<input type="text" class="form-control is-invalid" name="pedido" id="pedido" required placeholder="Ej: Sajta">
					</div>
					<div class="custom-control p-0 mb-3">
						<label class="" for="cantidad">Cantidad</label>
						<input type="number" class="form-control is-invalid" name="cantidad" id="cantidad" required placeholder="Ej: 2">
					</div>
					<div class="custom-control p-0 mb-3">
						<button class="btn btn-success w-100" id="button-enviar">Realizar Pedido</button>
					</div>
				</form>
			</div>
			<div class="col-12 mt-5">
				<p class="text-center text-dark font-weight-bold">Copyright © 2021, Autor: Jorge Luis Escobar Guarachi</p>
			</div>
		</div>
		
	</div>
	<script type="text/javascript" src="assets/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="assets/bootstrap-4.6/js/bootstrap.js"></script>
</body>
</html>