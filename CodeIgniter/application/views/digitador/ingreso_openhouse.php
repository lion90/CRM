    <datalist id="autocomplete">
    <?php 
        $query=$this->crm_model->nombreautocomplete();
        foreach ($query as $row) {
            echo "<option value=\"".$row['NAMES']." - ".$row['INSTITUTION_NAME']."\">";
        }

     ?>
 </datalist>
<h1 style="margin-top:175px;text-align:center">BIENVENIDO AL OPEN HOUSE</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('index.php/digitador/confirmar_openhouse',array('id'=>'auto'));
			   ?>
	
    <!-- <label class="fieldLabel" style="margin-left:20px;">Ingrese Nombre:</label> -->
	<input id="cargar" type="text"  name="load" placeholder="Ingrese su Nombre Completo..." required list="autocomplete" />
	<input id="enviar" value="" type="submit">
	
</form>

