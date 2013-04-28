
<div id="datos2">

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

<form id="registrar_info" accept-charset="utf-8"  action="<?php echo base_url(); ?>index.php/recepcionista/insert_datos">

	<center>
	<h1>REGISTRO</h1>		
	</center>
	<div style="float:left">
	<label class="fieldLabel">Nombre:</label><br><br>
	<label class="fieldLabel">Apellido:</label><br><br>
	<label class="fieldLabel">Instituci&oacute;n:</label><br><br>
	<label class="fieldLabel">Tel&eacute;fono:</label><br><br>
	<label class="fieldLabel">Email:</label><br><br>
	<label class="fieldLabel">Carrera de Inter&eacute;s:</label><br><br>
	</div>
	<div style="float:left">
	<input class="formInputText2" value="" type="text" value="" size="50" maxlength="50" name="names" required /><br><br>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="surname" required /><br><br>
	<input id="cargar_inst" class="formInputText2" type="text" value="" size="50" maxlength="50" name="institution" required list="autocomplete"  /><br><br>
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="phone" required /><br><br>	
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="email" required /><br><br> 
	<input class="formInputText2" type="text" value="" size="50" maxlength="50" name="career" required list="autocomplete2" /><br><br> 
	</div>
	<center><input id="btninsert" value="Registrar" type="submit"></center>
</form>
<?php 
if(isset($_POST['names']) and isset($_POST['surname']) and isset($_POST['institution']) and isset($_POST['phone']) and isset($_POST['email']) and isset($_POST['career']))
{
 $names=trim($_POST['names']);
 $surname=trim($_POST['surname']);
 $institution=trim($_POST['institution']);
 $phone=trim($_POST['phone']);
 $email=trim($_POST['email']);
 $career=$_POST['career'];

$query=$this->crm_model->insert_customer($names,$surname,$institution,$phone,$email,$career);

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
  		  career:$form.find("input[name='career']").val(),
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
