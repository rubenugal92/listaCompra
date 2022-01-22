<html>
<head>
	<link rel="stylesheet" href="../resources/estilos/login.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<script type='text/javascript' charset='utf-8'>
    // Hides mobile browser's address bar when page is done loading.
      window.addEventListener('load', function(e) {
        setTimeout(function() { window.scrollTo(0, 1); }, 1);
      }, false);
</script>
</head>

<center>
<body  style="background-color: #ffc61b">

<div id="intro" style="background-color: #ffc61b; font-family: 'Brush Script MT', cursive;font-size:40px">	
	<img src ="../resources/img/logoLista.png" width="200px" height="200px" style="margin-top: 190px">
	<br>
	<p>Mi Lista de la Compra</p>
	<div class="spinner-border" role="status">
	  <span class="sr-only"></span>
	</div>
</div>

<div id ="login">
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="../resources/img/logoLista.png" style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Mi lista de la compra</h4>
                </div>

                <form method ='POST' action = 'miLista.php'>
                  <p>Por favor, accede a tu cuenta o registrate</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control" name="mail" placeholder="mail"/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" name="pass" placeholder="password"/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Acceder</button>
                    <a class="text-muted" href="#!">¿Olvidaste la contraseña?</a>
                  </div>
                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <p class="small mb-0">Agiliza la elaboración de las listas de la compra con tu nueva app. Enviaremos la lista de la compra al mail que nos facilites.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
<script>

$("#login").hide();
$('#intro').fadeOut(4000, function(){

$("#login").fadeIn(2000);
});

</script>	
</body>

</html>



