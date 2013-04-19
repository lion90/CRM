<?php

?>
<script type="text/javascript" src="<?php echo base_url(); ?>js/autocomplete.js"></script>
<center>
<div id="div_principal">

<h2>E-Mails por Carreras</h2>
<table>
<tr>
<h3>Mensaje:</h3>
</tr>
<tr>
	<td>
	<textarea id="msj"></textarea>
	</td>
	<td>
<h3>Carrera:</h3> 
<input id="load" type="text" value="Buscar Carrera..." name="load" onblur="if(this.value==''){this.value='Buscar Carrera...'}" onfocus="if(this.value=='Buscar Carrera...'){this.value=''}"/>
<h3>Destinatarios:</h3><?php if(isset($datos["destinatarios"])) {echo $datos["destinatarios"];}
else echo "0"; ?>
	</td>
</tr>
</table>
</div>
</center>
<button>Enviar</button>