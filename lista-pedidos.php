<link rel="stylesheet" href="/assets/bootstrap-4.6/css/bootstrap.css">
<?php 

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'pedidos');

$sql = "SELECT * FROM registros";
$resultado = mysqli_query($con, $sql);

while ($fila = mysqli_fetch_row($resultado)!=NULL) {
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<?php 
}
mysqli_close($con);
?>