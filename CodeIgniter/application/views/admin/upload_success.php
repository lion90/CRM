<fieldset style="width:500px;border-radius:5px ">
<legend>Upload</legend>
<br />

<div style="color:black">"
<?php
	
	echo "<center><h3>Archivo Subido Exitosamente</h3>";
 	echo "<div>Paquetes Ingresados: ".$pack_in."</div>";
 	echo "<div>Clientes Actualizados: ".$customer_up." </div>";

?>
</div>
</center>
<div><center>

<p><?php echo anchor('index.php/administrador/do_upload', 'Desea Subir Otro Archivo!'); ?></p>
<p><?php echo anchor('index.php/1', 'Cancelar!'); ?></p>

</div>
</fieldset>

</form>
