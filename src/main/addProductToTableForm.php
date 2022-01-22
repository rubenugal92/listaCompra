<?php
session_start();
?>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
</head>
<header>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../resources/estilos/estiloTabla.css">
</header>
<body style="color:black">
<center>
	<br><br>
<form method="post" action="addProductToTable.php">
  <div class="form-group col-md-5">
    <input size="20" type="text" class="form-control input-sm" id="inputsm" placeholder="Introduce un producto" name="alimento">
  </div>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
</body>
<a class="btn btn-warning" role="button" href="miLista.php">Atrás</a>
</center>
</html>
