<div id="banner">
<div id="logo">
<img src="<?php echo base_url(); ?>style/imagenes/udb.png">
</div>
<div id="encabezados">
<h1>UNIVERSIDAD DON BOSCO</h1>
<h4>Departamento de Publicidad</h4>
</div>
<div id="logout">
<img  src="<?php echo base_url(); ?>style/imagenes/Log-Out-icon.png">
</div>
<div id="sesion">
	<p>
	<?php $this->load->library('session');
	$this->load->helper('url');
			$data=$this->session->all_userdata('username');
			echo $data['username'];
	 ?>
	 <br>
	 <a href="login/logout">Cerrar Sesi&oacute;n</a>
	</p>
</div>
</div>