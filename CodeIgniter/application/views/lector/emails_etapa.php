<center>
<?php 
$atributos = array('id' => 'form_send');
echo form_open_multipart('index.php/lector/send_etapa');  
?>
<div id="div_principal">
<h2>E-Mails por Etapas</h2>
<table>
<tr>
<input id="asunto" style="margin-left:-31px;" name="asunto" type="text"value="Agregar Asunto..." name="load" onblur="if(this.value==''){this.value='Agregar Asunto...'}" onfocus="if(this.value=='Agregar Asunto...'){this.value=''}"/>
<font style="font-weight: bold;"> Etapa:</font> 
<select id="select_etapas" name="etapa">
  <option value="1">Encuestas</option>
  <option value="2">Open House</option>
  </select><input type="button" class="button" id="load_email_etapa" style="margin-left:15px;" value="Destinos"/>
</tr>
<tr>
	<textarea id="msj" name="msj">Escriba el mensaje aquí...</textarea>
</tr>
<tr>
	<input type="button"  id="adjuntar"/>
<div id="div_adjuntar" style="">
	Adjuntar archivo: <input type='file' class="button" name='userfile' id='archivo'>
</div>
	</tr>
</table>
<div style="margin-left:850px" id="load_emails">
	<h3>Destinatarios:</h3>
	0
</div>
</div>
<input type="submit" style="margin-bottom:25px;" id="send" class="button" value="Enviar"/>
</center>
</form>
 <script> 
  CKEDITOR.replace( 'msj',
      {
        toolbar : 'Full',
         uiColor : '#60B0FC',

         width:'920px'
        //uiColor : '#0E1013'
      });
   $("#div_adjuntar").fadeToggle(0);
// tinyMCE.init({
           
//           mode : "textareas"
           
//       });

 </script>