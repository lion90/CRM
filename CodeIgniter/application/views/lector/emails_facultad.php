
<center>
<?php 
$atributos = array('id' => 'form_send');
echo form_open_multipart('index.php/lector/send_facultad');  
?>
<div id="div_principal">
<h2>E-Mails por facultades</h2>
<table>
<tr>
<input id="asunto" name="asunto" type="text" name="load" placeholder="Agregar Asunto"/>
<font style="font-weight: bold;"> Facultad:</font> 
<select id="select_facultades" name="facultades" style="margin-top:-100px;">
  <?php echo $facultades;?>
</select><input type="button" class="button" id="load_email" style="margin-left:5px;" value="Destinos"/>
</tr>
<tr>
	<textarea id="msj" name="msj"></textarea>
</tr>
<tr>
	<input type="button"  id="adjuntar" />
<div id="div_adjuntar" style="">
	Adjuntar archivo: <input type='file' class="button" name="userfile" id='archivo'>
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

         width:'955px'
        //uiColor : '#0E1013'
      });
   $("#div_adjuntar").fadeToggle(0);
// tinyMCE.init({
           
//           mode : "textareas"
           
//       });
$("#adjuntar").click(function(){
      $("#div_adjuntar").fadeToggle(1500);
    });
 </script>