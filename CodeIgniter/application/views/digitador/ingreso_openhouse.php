 <script>
  $(function(){
    var autocompletar = new Array();
    <?php //Esto es un poco de php para obtener lo que necesitamos
    $query=$this->crm_model->nombreautocomplete();
		foreach ($query as $row) { //usamos count para saber cuantos elementos hay ?>
    autocompletar.push('<?php echo $row['NAMES'].' - '.$row['INSTITUTION_NAME']; ?>');
    <?php }  ?>
    $("#cargar").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
    source: autocompletar //Le decimos que nuestra fuente es el arreglo
    });
     
  });
    </script>  
    
    
	<h1 style="margin-top:175px;text-align:center">BIENVENIDO AL OPEN HOUSE</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('index.php/digitador/confirmar_openhouse',array('id'=>'auto'));
			   ?>
	
    <label class="fieldLabel" style="margin-left:20px;">Ingrese Nombre:</label>
	<input id="cargar" type="text"  name="load" required />
	<input id="enviar" value="" type="submit">
	
</form>

