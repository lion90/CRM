/*css("background","url('localhost:81/probando/CRM/CodeIgniter/style/imagenes/12.png')")
"background","url('localhost:81/probando/CRM/CodeIgniter/style/imagenes/12.png')"*/
$(document).ready(function () {
  $("#ing_encuesta").click(function(){
$("#cuerpo").load("digitador/ing_encuesta");
 	 });
  $("#ing_openhouse").click(function(){
	window.open("digitador/ing_openhouse")
 	 });	
	$("#enviar").mouseover(function(){$(this).css("opacity","1");});
$("#enviar").mouseout(function(){$(this).css("opacity","0.7");});
	});


	