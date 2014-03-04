<?php
$nombres=$_POST['nombres'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$comentario=$_POST['comentario'];
if($nombres!="" and $telefono!="" and $email!="" and $comentario!="")
{
# ---------- Recibiendo variabbles -----------------

@$fecha = date("d/m/Y");
@$nombres = addslashes($_POST['nombres']);
@$telefono = addslashes($_POST['telefono']);
@$email = addslashes($_POST['email']);
@$comentario= addslashes($_POST['comentario']);

  # ---------- Cabeceras definidas como $headers para identificar el e-mail -----------------
$nombre2="SERVICOM";
$correo="info@servicomperu.com";
$pfw_header = "From: $nombre2<$email>\r\n" 
  . "Reply-To: info@servicomperu.com\n";
$pfw_subject = "Registro del Cliente $nombres";
$pfw_email_to = "info@servicomperu.com";
$pfw_message = "COMENTARIOS PARA SERVICOM\n"
. "\n"
 ."Fecha de Registro: ".$fecha."\n"
 ."Nombre de Contacto: ".$nombres."\n"
 ."Teléfono: ".$telefono."\n"
 ."E-mail: ".$email."\n"
 ."Comentario: ".$comentario."\n";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header) ;
# ---------- Cabeceras definidas como $headers para identificar el e-mail -----------------
$registrocorrecto="Su Comentario fue Enviado";
$nombres="";
$telefono="";
$email="";
$comentario="";
}
else
{
$blanco="Ingrese Datos (*)";
}
?>
<!DOCTYPE html>
<html lang="es-PE">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Título</title>
<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="./styles.css">
<link rel="stylesheet" href="colorbox/colorbox.css" />

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="overlay">
     <img alt="Loading" />
	</div>
	
	 <div class="container">

      <div class="masthead">
        <h3 class="text-muted"></h3>
        <ul class="nav nav-justified">
          <li class="active"><a href="index.html">Inicio</a></li>
          <li><a href="">Projects</a></li>
          <li><a href="servicios.html">Servicios</a></li>
          <li><a href="#">Downloads</a></li>
          <li><a href="#">Sobre Nosotros</a></li>
          <li><a href="#">Contáctanos</a></li>
        </ul>
      </div>
	 
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>El Show de Anita!</h1>
        <!--  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>-->
      </div>
	  <div class="row">
		<div id="container-form" class="span13 offset1 block contact-page">
			<h2>Eres una bodega?</h2>
			<p>.....</p>
			<div class="form-container wineries-form clearfix">
				<h2>Información de la bodega (ninguno de los siguientes campos es obligatorio)</h2>
				<div class="col1">
					<div class="wrap">
						<input id="winery_name" name="winery_name" type="text" placeholder="Nombre de la bodega">
						<input id="winery_website" name="winery_website" type="text" placeholder="Website">
						<input id="winery_email" name="winery_email" type="text" placeholder="E-mail">
						<input id="winery_address" name="winery_address" type="text" placeholder="Dirección">	
					</div>
				</div>
				<div class="col2">
					<div class="wrap">
						<textarea id="winery_comments" name="winery_comments" placeholder="Comentarios"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="span13 offset1 block contact-page">
			<div class="wrap contact-page-buttons clearfix">
				<button type="submit" class="ease-hover">ENVIAR</button>
				<a href="#" class="button-orange add-wine ease-hover">INCLUIR VINO +</a>
			</div>
		</div>
	</div>
	
	  <div class="container social-links">
	  <div class="follow span7 offset1">
  				<span class="bold">SÍGUENOS</span>
  				<a class="instagram" href="#" target="_blank"></a>
  				<a class="facebook" href="https://www.facebook.com/faro.micaela" target="_blank"></a>
  				<a class="twitter" href="#" target="_blank"></a>
				</div>
  	  </div>
	 

      <!-- Site footer -->
      <div class="footer">
        <p>&copy; Faro Producciones 2014</p>
      </div>

    </div> <!-- /container -->
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/shortcut.js"></script>
<script src="./colorbox/jquery.colorbox-min.js"></script>
<script>
	$(window).load(function(){
	// PAGE IS FULLY LOADED  
	// FADE OUT YOUR OVERLAYING DIV
		$('#overlay').delay(800).fadeOut();
	});

	shortcut.add("Ctrl+Shift+X",function(){
		$.colorbox({href:"copyright.html"});
	});

	$(document).ready(function(){
	//Examples of how to assign the Colorbox event to elements
		$(".group1").colorbox({rel:'group1'});
	});
</script>
</body>
</html>