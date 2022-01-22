<?php
session_start();
include_once('utils/constants.php');
$mailToUse=$_SESSION['sessionUser'];
$con = pg_connect("host=".$host. " dbname=".$db_name." user= ".$user. " password=".$pass)
    or die('No se ha podido conectar a la base de datos: ' . pg_last_error());
$query = 'SELECT name FROM listaDeLaCompra';
$result = pg_query($query) or die('La consulta falló: ' . pg_last_error());

//MAIL:
try {
$to = $mailToUse;
$subject = "LISTA DE LA COMPRA";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <rubenugal@gmail.com>';

$message = "
<html>
<head>
<title>&nbsp LISTA DE LA COMPRA</title>
</head>
<body>
<h3 style='color:white;background-color:black;width:200px;'>LISTA DE LA COMPRA</h3>";


while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
	foreach ($line as $col_value) {

$message.= "<li><h4><b>$col_value</b></h4></li>";

       }
}

$message.="
</body>
</html>
";

pg_close($con);
mail($to,$subject,$message,$headers);


}catch(Exception $e){
echo "ERROR AL ENVIAR EL MAIL :" . $e;
}

echo "
<html>
<head>
<link rel='stylesheet' href='../estilos/login.css'>
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>	
</head>
<center><section class='h-100 gradient-form' style='background-color: #eee;'>
  <div class='container py-5 h-100'>
    <div class='row d-flex justify-content-center align-items-center h-100'>
      <div class='col-xl-10'>
        <div class='card rounded-3 text-black'>
          <div class='row g-0'>
            <div class='col-lg-6'>
              <div class='card-body p-md-5 mx-md-4'>
              <center>
               <h3>Lista enviada a ".$mailToUse."</h3>

              </div>
            </div>
          </div>
        </div>
      </div>
    
</section>";

header("Refresh:2; url=miLista.php");

?>