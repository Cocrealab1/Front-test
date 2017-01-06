<!--Funcion hide/show para mostrar y ocultar boton3 Nicolas Cardenas-->	

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

<!--Funcion fadeOut/fadeIn para dar efecto de desvanecimiento Nicolas Cardenas-->

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
