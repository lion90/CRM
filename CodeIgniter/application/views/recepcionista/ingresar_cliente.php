
<div id="datos2">

<datalist id="autocomplete">
    <?php 
        $query2=$this->crm_model->institucionesautocomplete();
        foreach ($query2 as $row) {
            echo "<option value=\"".$row['INSTITUTION_NAME']."\">";
        }

     ?>
 </datalist> 
<form id="registrar_info" accept-charset="utf-8"  action="http://localhost:81/CRM/CodeIgniter/index.php/recepcionista/insert_datos">

	<center>
	<h1>REGISTRO</h1>		
	</center>
	<label class="fieldLabel">Nombre:</label>
	<input class="formInputText2" value="" type="text" value="" size="50" maxlength="50" name="names" required /><br><br>
	<label class="fieldLabel">Apellido:</label>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="surname" required /><br><br>
	<label class="fieldLabel">Instituci&oacute;n:</label>
	<input id="cargar_inst" class="formInputText2" type="text" value="" size="50" maxlength="50" name="institution" required list="autocomplete"  /><br><br>
	<label class="fieldLabel">Tel&eacute;fono:</label>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="phone" required /><br><br>	
	<label class="fieldLabel">Email:</label>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="email" required /><br><br> 
	<label class="fieldLabel">Cómo se entero:</label>
<select name="medio" required>
		<option value="1" >RADIO</option>
		<option value="2" >PRENSA</option>
		<option value="3" >TV</option>
		<option value="4" >VISITA INSTITUCIONAL</option>
		<option value="5" >PAGINA WEB</option>
		<option value="6" >FACEBOOK</option>
</select><br><br>
	<input id="btninsert" value="Registrar" type="submit">
</form>
<?php 
if(isset($_POST['names']) and isset($_POST['surname']) and isset($_POST['institution']) and isset($_POST['phone']) and isset($_POST['email']) and isset($_POST['medio']))
{
 $names=trim($_POST['names']);
 $surname=trim($_POST['surname']);
 $institution=trim($_POST['institution']);
 $phone=trim($_POST['phone']);
 $email=trim($_POST['email']);
 $medio=$_POST['medio'];

$query=$this->crm_model->insert_open($names,$surname,$institution,$phone,$email,$medio);

 echo "<h3>Cliente Ingresado Exitosamente</h3>";
 /*redirect('index.php/recepcionista');*/
}
?>
</div>
<script type="text/javascript">
$("#registrar_info").submit(function(event) {
 
   event.preventDefault();
 var $form = $( this ),
          
      url = $form.attr( 'action' );
 
  /* Send the data using post */
  var posting = $.post( url, { 
  	medio:$form.find("select[name='medio']").val(),
          names:$form.find("input[name='names']").val(),
          surname:$form.find("input[name='surname']").val(),
          institution:$form.find("input[name='institution']").val(),
          email:$form.find("input[name='email']").val(),
          phone:$form.find("input[name='phone']").val()
           
      });
 
  /* Put the results in a div */
  posting.done(function( data ) {
    /*var content = $(data).find("#datos");*/
    $( "#content" ).empty();
	$( "#content2" ).empty().html(data);

  });
});
</script>
