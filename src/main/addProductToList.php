<?php
session_start();
$_SESSION['sessionUser'];
$_SESSION['sessionPass'];
include_once('utils/constants.php');
$con = pg_connect("host=".$host. " dbname=".$db_name." user= ".$user. " password=".$pass)
    or die('No se ha podido conectar a la base de datos: ' . pg_last_error());

$producto= $_GET['name'];

$query = "INSERT INTO listaDeLaCompra (name) VALUES ('".$producto."');";
$result = pg_query($query); 

pg_close($con);

header('Location:miLista.php');


?>