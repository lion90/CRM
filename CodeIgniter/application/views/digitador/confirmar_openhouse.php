<?php 
 $data=explode('-', $_POST['load']);
$nombre=trim($data[0]);
$query=$this->crm_model->confirmar_datos($nombre);

?>
<datalist id="autocomplete">
    <?php 
        $query2=$this->crm_model->institucionesautocomplete();
        foreach ($query2 as $row) {
            echo "<option value=\"".$row['INSTITUTION_NAME']."\">";
        }

     ?>
 </datalist> 
<div id="datos">
	<div id="info">
<?php

if($query!=""){

echo 
	"<h1>".$query['NAMES']." ".$query['SURNAME']."</h1>".
	"<h3>Instituci&oacute;n</h3><h2>".$query['INSTITUTION_NAME'] ."</h2>".
	"<h3>Tel&eacute;fono</h3><h2>".$query['PARENT_PHONE'] ."</h2>".
	"<h3>Email</h3><h2>".$query['CUSTOMER_EMAIL'] ."</h2>
	";
 ?>
</div>
	<form id="areyou">
	<input id="txthdd" type="hidden" value="<?php echo $nombre; ?>" />
	<label>¿Eres tú?</label>			   
	<input id="btnconfyes" value="Sí" type="button">
	<input id="btnconfno" value="No" type="button">

	</form>

<?php echo form_open('index.php/digitador/update_datos',array('id'=>'editar_info','style'=>'display:none;'));
			   ?>
	<center>
	<h1>REGISTRO</h1>		
	</center>
	<input type="hidden" value="<?php echo $query['CUSTOMER_ID']; ?>" name="idcust" />
	<label class="fieldLabel">Nombre:</label>
	<input class="formInputText2" type="text" value="<?php echo $query['NAMES']; ?>" size="50" maxlength="50" name="names"  required /><br><br>
	<label class="fieldLabel">Apellido:</label>
	<input class="formInputText2" type="text" value="<?php echo $query['SURNAME']; ?>" size="50" maxlength="50" name="surname" required /><br><br>
	<label class="fieldLabel">Instituci&oacute;n:</label>
	<input id="cargar_inst" class="formInputText2" type="text" value="<?php echo $query['INSTITUTION_NAME']; ?>" size="50" maxlength="50" name="institution" required /><br><br>
	<label class="fieldLabel">Tel&eacute;fono:</label>
	<input class="formInputText2" type="text" value="<?php echo $query['PARENT_PHONE']; ?>" size="50" maxlength="50" name="phone" required /><br><br>
	<label class="fieldLabel">Email:</label>
	<?php 	if($query['CUSTOMER_EMAIL']!=" "){ 	?>
	<input class="formInputText2" type="text" value="<?php echo $query['CUSTOMER_EMAIL']; ?>" size="50" maxlength="50" name="email" required /><br><br>	
	<?php 	}	else{	 ?>
	 <input class="formInputText2" type="text"  size="50" maxlength="50" name="email" required /><br><br>	
	 <?php } ?>
	<label class="fieldLabel">Cómo se entero:</label>
	<select required name="medio">
		<option value="1" >RADIO</option>
		<option value="2" >PRENSA</option>
		<option value="3" >TV</option>
		<option value="4" >VISITA INSTITUCIONAL</option>
		<option value="5" >PAGINA WEB</option>
		<option value="6" >FACEBOOK</option>
</select><br><br>
	<input id="btnupdate" value="Registrar" type="submit">
</form>
<?php echo form_open('index.php/digitador/insert_datos',array('id'=>'ingresar_info','style'=>'display:none;'));
			   ?>
<center>
	<h1>REGISTRO</h1>		
	</center>
	<label class="fieldLabel">Nombre:</label>
	<input class="formInputText2" value="<?php echo $nombre; ?>" type="text" value="" size="50" maxlength="50"  name="names"  required /><br><br>
	<label class="fieldLabel">Apellido:</label>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="surname"  required /><br><br>
	<label class="fieldLabel">Instituci&oacute;n:</label>
	<input id="cargar_inst" class="formInputText2" type="text" value="" size="50" maxlength="50"  name="institution"  required list="autocomplete" /><br><br>
	<label class="fieldLabel">Tel&eacute;fono:</label>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="phone"  required /><br><br>	
	<label class="fieldLabel">Email:</label>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="email"  required /><br><br>
	<label class="fieldLabel">Cómo se entero:</label>
		<select required name="medio">
		<option value="1">RADIO</option>
		<option value="2">PRENSA</option>
		<option value="3">TV</option>
		<option value="4">VISITA INSTITUCIONAL</option>
		<option value="5">PAGINA WEB</option>
		<option value="6">FACEBOOK</option>
</select><br><br>
	<input id="btninsert" value="Registrar" type="submit">
</form>
<?php } else{	?>

<?php echo form_open('index.php/digitador/insert_datos',array('id'=>'registrar_info'));
			   ?>
	<center>
	<h1>REGISTRO</h1>		
	</center>
	<label class="fieldLabel">Nombre:</label>
	<input class="formInputText2" value="<?php echo $nombre; ?>" type="text" value="" size="50" maxlength="50" name="names" required /><br><br>
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

<?php }  ?>
</div>