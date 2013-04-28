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
 <datalist id="autocomplete2">
    <?php 
        $query1=$this->encuesta->carreras();
        foreach ($query1->result() as $row) {
            echo "<option value=\"".$row->CAREER_NAME."\">";
        }

     ?>
 </datalist>
<div id="datos">
<div id="info" >
<?php

if($query!=""){

echo 
	"<center><h1>".$query['NAMES']." ".$query['SURNAME']."</h1>".
	"<h3>Instituci&oacute;n</h3><h2>".$query['INSTITUTION_NAME'] ."</h2>".
	"<h3>Tel&eacute;fono</h3><h2>".$query['PARENT_PHONE'] ."</h2>".
	"<h3>Email</h3><h2>".$query['CUSTOMER_EMAIL'] ."</h2></center>
	";
 ?>
</div>
<center>
	<form id="areyou">
	<input id="txthdd" type="hidden" value="<?php echo $nombre; ?>" />
	<label class="fieldLabel">¿Eres tú?</label>			   
	<input id="btnconfyes" value="Sí" type="button">
	<input id="btnconfno" value="No" type="button">

	</form>
</center>

<?php echo form_open('index.php/digitador/update_datos',array('id'=>'editar_info','style'=>'display:none;'));
			   ?>
	<center>
	<h1>REGISTRO</h1>		
	</center>
	<div style="float:left; text-align:right">
	<label class="fieldLabel">Nombre:</label><br><br>
	<label class="fieldLabel">Apellido:</label><br><br>
	<label class="fieldLabel">Instituci&oacute;n:</label><br><br>
	<label class="fieldLabel">Tel&eacute;fono:</label><br><br>
	<label class="fieldLabel">Email:</label><br><br>
	<label class="fieldLabel">Carrera de Inter&eacute;s:</label><br><br>
	<label class="fieldLabel">Cómo se entero:</label><br><br>
	</div>
	<div style="float:left">
	<input type="hidden" value="<?php echo $query['CUSTOMER_ID']; ?>" name="idcust" />
	<input class="formInputText2" type="text" value="<?php echo $query['NAMES']; ?>" size="50" maxlength="50" name="names"  required /><br><br>
	<input class="formInputText2" type="text" value="<?php echo $query['SURNAME']; ?>" size="50" maxlength="50" name="surname" required /><br><br>
	<input id="cargar_inst" class="formInputText2" type="text" value="<?php echo $query['INSTITUTION_NAME']; ?>" size="50" maxlength="50" name="institution" required /><br><br>
	<input class="formInputText2" type="text" value="<?php echo $query['PARENT_PHONE']; ?>" size="50" maxlength="50" name="phone" required /><br><br>
	<?php 	if($query['CUSTOMER_EMAIL']!=" "){ 	?>
	<input class="formInputText2" type="text" value="<?php echo $query['CUSTOMER_EMAIL']; ?>" size="50" maxlength="50" name="email" required /><br><br>	
	<?php 	}	else{	 ?>
	<input class="formInputText2" type="text"  size="50" maxlength="50" name="email" required /><br><br>	
	<?php } ?>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="career" required list="autocomplete2" /><br><br>
	<select class="formSelect" required name="medio">
		<option value="1" >RADIO</option>
		<option value="2" >PRENSA</option>
		<option value="3" >TV</option>
		<option value="4" >VISITA INSTITUCIONAL</option>
		<option value="5" >PAGINA WEB</option>
		<option value="6" >FACEBOOK</option>
	</select><br><br>
	</div>
	<center><input id="btnupdate" value="Registrar" type="submit"></center>
</form>
<?php echo form_open('index.php/digitador/insert_datos',array('id'=>'ingresar_info','style'=>'display:none;'));
			   ?>
<center>
	<h1>REGISTRO</h1>		
	</center>
	<div style="float:left; text-align:right">
	<label class="fieldLabel">Nombre:</label><br><br>
	<label class="fieldLabel">Apellido:</label><br><br>
	<label class="fieldLabel">Instituci&oacute;n:</label><br><br>
	<label class="fieldLabel">Tel&eacute;fono:</label><br><br>
	<label class="fieldLabel">Email:</label><br><br>
	<label class="fieldLabel">Carrera de Inter&eacute;s:</label><br><br>
	<label class="fieldLabel">Cómo se entero:</label><br><br>
	</div>
	<div style="float:left">
	<input class="formInputText2" value="<?php echo $nombre; ?>" type="text" value="" size="50" maxlength="50"  name="names"  required /><br><br>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="surname"  required /><br><br>
	<input id="cargar_inst" class="formInputText2" type="text" value="" size="50" maxlength="50"  name="institution"  required list="autocomplete" /><br><br>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="phone"  required /><br><br>	
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="email"  required /><br><br>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="career" required list="autocomplete2" /><br><br>
		<select class="formSelect" required name="medio">
		<option value="1">RADIO</option>
		<option value="2">PRENSA</option>
		<option value="3">TV</option>
		<option value="4">VISITA INSTITUCIONAL</option>
		<option value="5">PAGINA WEB</option>
		<option value="6">FACEBOOK</option>
		</select><br><br>
	</div>
	<center><input id="btninsert" value="Registrar" type="submit"></center>
</form>
<?php } else{	?>

<?php echo form_open('index.php/digitador/insert_datos',array('id'=>'registrar_info'));
			   ?>
	<center>
	<h1>REGISTRO</h1>		
	</center>
	<div style="float:left; text-align:right">
	<label class="fieldLabel">Nombre:</label><br><br>
	<label class="fieldLabel">Apellido:</label><br><br>
	<label class="fieldLabel">Instituci&oacute;n:</label><br><br>
	<label class="fieldLabel">Tel&eacute;fono:</label><br><br>
	<label class="fieldLabel">Email:</label><br><br>
	<label class="fieldLabel">Carrera de Inter&eacute;s:</label><br><br>
	<label class="fieldLabel">Cómo se entero:</label><br><br>
	</div>
	<div style="float:left">
	<input class="formInputText2" value="<?php echo $nombre; ?>" type="text" value="" size="50" maxlength="50" name="names" required /><br><br>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="surname" required /><br><br>
	<input id="cargar_inst" class="formInputText2" type="text" value="" size="50" maxlength="50" name="institution" required list="autocomplete"  /><br><br>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="phone" required /><br><br>	
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="email" required /><br><br> 
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="career" required list="autocomplete2" /><br><br>
	<select class="formSelect" name="medio" required style="text-align:left">
		<option value="1" >RADIO</option>
		<option value="2" >PRENSA</option>
		<option value="3" >TV</option>
		<option value="4" >VISITA INSTITUCIONAL</option>
		<option value="5" >PAGINA WEB</option>
		<option value="6" >FACEBOOK</option>
	</select><br><br>
	</div>
	<center><input id="btninsert" value="Registrar" type="submit"></center>
</form>

<?php }  ?>
</div>