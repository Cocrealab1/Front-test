
<!DOCTYPE html>
<html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>RUTAS POR COLOMBIA</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<!-- Botones con Hover Ernesto Ballen -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1">
	<button><img src="img/boton.png" ></button>
	<p>Boton 1 Funcion hover para cambiar color fondo de la imagen</p>
	<form action="" id="boton1">
	<table border="0" width="100%">
	<tr>
	<td>Comentarios: </td>
	<td><TEXTAREA required="required" NAME="comentario" id="comentario" ROWS="2" COLS="25"></TEXTAREA></td>
	</tr>
		</table>
		<input type="submit" value="Enviar" class="btn btn-primary"/>
  </form>

	</div>
		
	<div class="col-xs-12 col-sm-6 col-md-4  col-md-offset-1">
	<button>
	<img src="img/boton1.jpg" alt="logo" id="logo" height="150px"></button>
	<p>Boton 2 Funcion animate jquery para modificar tamaño imagen Ernesto Ballen </p>
	<form action="" id="boton2">
	<table border="0" width="100%">
	<tr>
	<td>Comentarios: </td>
	<td><TEXTAREA required="required" NAME="comentario1" id="comentario1" ROWS="2" COLS="25"></TEXTAREA></td>
	</tr>
		</table>
		<input type="submit" value="Enviar" class="btn btn-warning"/>

  </form>	
		
		</div>
	
<!--Botones Nicolas Cardenas-->	
	<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1">
		<br />
		<button><img src="img/boton2.jpg" alt="Boton 2" id="logo3" height="150px"></button>
		<p>Boton 3 Funcion hide/show para ocultar y mostrar la imagen</p>
		<form action="" id="boton3">
			<table border="0" width="100%">
				<tr>
					<td>Comentarios: </td>
					<td><textarea required="required" name="comentario1" id="comentario1" rows="2" cols="25"></textarea></td>
				</tr>
			</table>
			<input type="submit" value="Enviar" class="btn btn-info"/>
		</form>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1">
		<br />
		<button><img src="img/boton3.jpg" alt="Boton 3" id="logo4" height="150px"></button>
		<p>Boton 4 Funcion fadeOut/fadeIn para dar efecto de desvanecimiento a la imagen</p>
		<form action="" id="boton4">
			<table border="0" width="100%">
				<tr>
					<td>Comentarios: </td>
					<td><TEXTAREA required="required" NAME="comentario1" id="comentario1" ROWS="2" COLS="25"></TEXTAREA></td>
				</tr>
			</table>
			<input type="submit" value="Enviar" class="btn btn-danger"/>
		</form>
	</div>
			
	</div>
	
</div>

<script src="js/jquery.js"></script>
<script src="js/funcionusuarios.js"></script>
<script src="js/bootstrap.js"></script>
<!-- Funcion hover para cambiar color fondo de la imagen Ernesto Ballen-->
<script>
$(document).ready(function(){
    $("img").hover(function(){
        $(this).css("background-color", "#2DCFDB");
        }, function(){
        $(this).css("background-color", "#08298A");
    });
});
</script>
<!-- Funcion animate jquery para modificar tamaño imagen Ernesto Ballen-->
<script>
$(document).ready(function(){
  $("#logo").mouseover(function(){
     $(this).animate({height:'200px'});
  });
  $("#logo").mouseout(function(){
     $(this).animate({height:'150px'});
  }); 
});
</script>

<!--Funcion hide/show para mostrar y ocultar boton3 Nicolas Cardenas-->	
<script>
	$(document).ready(function()
	{
		$("#logo3").mouseover(function()
			{
				$(this).hide("slow");
			});
		$("#logo3").mouseout(function()
			{
				$(this).show("slow");
			});
	});
</script>

<!--Funcion fadeOut/fadeIn para dar efecto de desvanecimiento Nicolas Cardenas-->
<script>
	$(document).ready(function()
	{
		$("#logo4").mouseover(function()
			{
				$(this).fadeOut(1000);
			});
		$("#logo4").mouseover(function()
			{
				$(this).fadeIn(1000);
			});
		
	});
</script>

</body>
</html>