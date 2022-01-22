<?php
session_start();
$_SESSION['sessionUser'];
$_SESSION['sessionPass'];
include_once('constants.php');
$con = pg_connect("host=".$host. " dbname=".$db_name." user= ".$user. " password=".$pass)
    or die('No se ha podido conectar a la base de datos: ' . pg_last_error());

$query = "delete from listaDeLaCompra";
$result = pg_query($query); //para que se ejecute
pg_close($con);

echo "
<header> 
<link rel='stylesheet' href='../estilos/estiloTabla.css'>
</header>
<center><br><br><br><br><h3 style='color:black'>LISTA VACIADA!</h3>";

header("Refresh:2; url=../miLista.php");

?>