<?php $this->load->library('session');
	$this->load->helper('url'); ?>
<div id="banner">
<div id="logo">
<a href="digitador"><img src="<?php echo base_url(); ?>style/imagenes/udb.png"></a>
</div>
<div id="encabezados">
<h1>UNIVERSIDAD DON BOSCO</h1>
<h4>Departamento de Publicidad</h4>
</div>
<div id="logout">
<a href="login/logout"><img  src="<?php echo base_url(); ?>style/imagenes/Log-Out-icon.png" /></a>
</div>
<div id="sesion">
	<p>
	<?php
			$data=$this->session->all_userdata('username');
			echo $data['username'];
	 ?>
	 <br />
	 <a href="login/logout">Cerrar Sesi&oacute;n</a>
	</p>
</div>
</div>