<?php echo validation_errors(); ?>
<?php echo form_open('digitador/confirmar_openhouse') ?>
	<h1 style="color:white">BIENVENIDO AL OPEN HOUSE</h1>
	<div id="auto">
	<input id="cargar" type="text" value="INGRESE SU  NOMBRE..." name="load" onblur="if(this.value==''){this.value='INGRESE SU  NOMBRE...'}" onfocus="if(this.value=='INGRESE SU  NOMBRE...'){this.value=''}" /><input id="enviar" value="" type="submit">
	</div>
	<div id="resultado">
	</div>