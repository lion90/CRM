/*css("background","url('localhost:81/probando/CRM/CodeIgniter/style/imagenes/12.png')")
"background","url('localhost:81/probando/CRM/CodeIgniter/style/imagenes/12.png')"*/
$(document).ready(function() 
{
  $("#encuesta").click(function()
  	{
  		$("#content").load("digitador/ing_encuesta");
 	 });
  $("#ingresar_encuesta").click(function()
    {
      $("#content").load("digitador/ing_encuesta");
   });

  $("#excel").click(function()
  	{
  		$("#content").load("administrador/excel");
 	 });

  $("#OH").click(function()
  {
	window.open("digitador/ing_openhouse")
	});	
	
	$("#enviar").mouseover(function(){$(this).css("opacity","1");});

	$("#enviar").mouseout(function(){$(this).css("opacity","0.7");});

});


	