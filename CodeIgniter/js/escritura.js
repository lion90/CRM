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

$("#subir").click(function()
    {
      $("#content").load("administrador/do_upload");
   });
$("#addcustomer").click(function()
    {
      $("#content").load("recepcionista/ingresar_cliente");
   });
$("#modcustomer").click(function()
  	{
  		$("#content").load("recepcionista/modificar_cliente");
 	 });

$("#btnconfyes").click(function()
    {
      /*$.post("editar_datos",{
        nombre: $("#txthdd").val()
      })*/
     /* $("#datos").load("editar_datos");*/
     $("#areyou").hide();
     $("#info").hide();
     $("#editar_info").show();
     $("#ingresar_info").hide();
   });
  $("#btnconfno").click(function()
    {
    $("#areyou").hide();
     $("#info").hide();
     $("#editar_info").hide();
     $("#ingresar_info").show();

   });

  $("#OH").click(function()
  {
	window.open("digitador/ing_openhouse")
	});	
	
	$("#enviar").mouseover(function(){$(this).css("opacity","1");});

	$("#enviar").mouseout(function(){$(this).css("opacity","0.7");});

});


	