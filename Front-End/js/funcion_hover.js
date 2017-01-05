
<!-- Funcion hover para cambiar color fondo de la imagen Ernesto Ballen-->

$(document).ready(function(){
    $("img").hover(function(){
        $(this).css("background-color", "#2DCFDB");
        }, function(){
        $(this).css("background-color", "#08298A");
    });
});

<!-- Funcion animate jquery para modificar tamaño imagen Ernesto Ballen-->

$(document).ready(function(){
  $("#logo").mouseover(function(){
     $(this).animate({height:'200px'});
  });
  $("#logo").mouseout(function(){
     $(this).animate({height:'150px'});
  }); 
});
