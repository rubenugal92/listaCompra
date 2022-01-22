<?php
session_start();
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
if(isset($_POST['mail'])){
$userMail = $_POST['mail'];
$userPass = $_POST['pass'];
$_SESSION['sessionUser'] = $userMail;
$_SESSION['sessionPass'] = $userPass;
}

?>

<html>
<head>
<link rel="stylesheet" href="../resources/estilos/estiloTabla.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="viewport" content="width=630">
</head>
<body>
<div class="card" style="width: 190px;opacity: 0.7; height:115px; margin-top: 20px;margin-left: 20px;font-size: 12px;overflow:auto;
	box-shadow: 0 0 100px rgba(0,0,0,5); ">
  <div class="card-body">
    <p class="card-text"><?php echo "Bienvenido/a ". $_SESSION['sessionUser']; ?></p>
    <a style="font-size: 12px"href="index.php" class="btn btn-info">Cerrar sesión</a>
  </div>
</div>

<?php
include_once('utils/constants.php');
$con = pg_connect("host=".$host. " dbname=".$db_name." user= ".$user. " password=".$pass)
    or die('No se ha podido conectar a la base de datos: ' . pg_last_error());


$query = 'SELECT name FROM productos';
$result = pg_query($query) or die('La consulta falló: ' . pg_last_error());

?>

	<center>
		<br><br>
		<div class='container'>
			<a class='btn btn-dark' role='button' href='addProductToTableForm.php'>Añadir producto a la lista</a>
			<br><br>
			<table>
				<thead>
					<tr>
						<th>PRODUCTO</th>
						<th></th>
						<th>¿AÑADIDO? </th>
					</tr>	
					</thead>
	<tbody>

<?php			
			
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "<tr>";
    foreach ($line as $col_value) {
        echo "<td><h5><b> $col_value </b></h5></td>
        ";
    }

    $queryLista = 'SELECT name FROM listaDeLaCompra where name ='."'".$line['name']."'";
	$resultLista = pg_query($queryLista) or die('La consulta falló: ' . pg_last_error());

	$añadido = 'NO';
	
	if(pg_num_rows($resultLista)==1){
		$añadido = 'SI';

	}

?>
    
    <td><a class="btn btn-info" role="button" href="addProductToList.php?name=<?php echo $line['name']; ?>">Añadir a la lista </a></td>
    <td><h5><b><?php echo $añadido ?></b></h5></td>

	  </tr>
	</tbody>

<?php
}
?>

</table>
<br><br>
<?php
pg_close($con);
?>

<a class="btn btn-dark" role="button" href="generateList.php">Enviar lista</a></td>
<a class="btn btn-dark" role="button" href="utils/deleteLista.php">Vaciar lista</a><br><br>
<a class="btn btn-danger" role="button" href="utils/deleteTable.php">Eliminar tabla</a>

</td>
</body>
</html>



