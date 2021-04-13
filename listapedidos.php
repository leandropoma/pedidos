<link rel="stylesheet" href="/assets/bootstrap-4.6/css/bootstrap.css">

<?php 

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'pedidos');

$sql = "SELECT * FROM registros";
$resultado = mysqli_query($con, $sql);
echo '<div class="container p-1">';
echo '<div class="row justify-content-center">';
echo '<div class="col-12 col-lg-10 mb-3">';
echo '<h3 class="text-dark text-center">LISTADO DE PEDIDOS</h3>';
echo '</div>';
echo '<div class="col-12 col-lg-10 mb-3">';
echo '<a class="btn btn-primary" href="pedidos.php">Realizar Nuevo Pedido</a>';
echo '</div>';
echo '<div class="col-12 col-lg-10">';
echo '<table class="table table-hover">';
  echo '<thead class="thead-dark">';
    echo '<tr>';
      echo '<th scope="col">ID</th>';
      echo '<th scope="col">CARNTET</th>';
      echo '<th scope="col">CLIENTE</th>';
      echo '<th scope="col">TELÉFONO</th>';
      echo '<th scope="col">PEDIDO</th>';
      echo '<th scope="col">CANTIDAD</th>';
      echo '<th scope="col">FECHA</th>';
      echo '<th scope="col">ESTADO</th>';
    echo '</tr>';
  echo '</thead>';
  echo '<tbody>';

while (($fila = mysqli_fetch_row($resultado))!=NULL) {
    echo '<tr>';
      echo '<td>'.$fila[0].'</td>';
      echo '<td>'.$fila[3].'</td>';
      echo '<td>'.$fila[2].'</td>';
      echo '<td>'.$fila[1].'</td>';
      echo '<td>'.$fila[4].'</td>';
      echo '<td>'.$fila[5].'</td>';
      echo '<td>'.$fila[6].'</td>';
      echo '<td>'.$fila[7].'</td>';
    echo '</tr>';
}
	echo '</tbody>';
echo '</table>';
echo '</div>
	</div>
</div>';

mysqli_close($con);
?>