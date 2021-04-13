<?php 

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'pedidos');

if (!isset($_REQUEST['nrotel'])&&!isset($_REQUEST['carnet'])&&!isset($_REQUEST['nombres'])&&!isset($_REQUEST['pedido'])&&!isset($_REQUEST['cantidad'])) {
	echo '<div class="alert alert-danger text-center" role="alert">Debe ingresar todos los valores</div><br><a href="'.$_SERVER['HTTP_REFERER'] .'">Volver al formulario</a>';
}
if (!$_REQUEST['cantidad']>0) {
	print('Cantidad debe ser mayor a 0 <br><a href="'.$_SERVER['HTTP_REFERER'] .'">Volver al formulario</a>');
}

$nrotel = $_REQUEST['nrotel'];
$carnet = $_REQUEST['carnet'];
$nombres = $_REQUEST['nombres'];
$pedido = $_REQUEST['pedido'];
$cantidad = $_REQUEST['cantidad'];
$fecha = date('Y-m-d');

$sql = "INSERT INTO registros (nrotel, nombres, carnet, pedido, cantidad, fecha, estado) VALUES('$nrotel', '$nombres', $carnet, '$pedido', $cantidad, '$fecha', 'p')";
mysqli_query($con, $sql);
mysqli_close($con);
header("location: listapedidos.php");

?>