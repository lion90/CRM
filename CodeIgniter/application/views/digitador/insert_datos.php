<?php 
 $names=trim($_POST['names']);
 $surname=trim($_POST['surname']);
 $institution=trim($_POST['institution']);
 $phone=trim($_POST['phone']);
 $email=trim($_POST['email']);
 $medio=$_POST['medio'];
 $career=$_POST['career'];


$query=$this->crm_model->insert_open($names,$surname,$institution,$phone,$email,$medio,$career);
?>

<div id="auto" style="margin-top: 150px;">

<h2>Su Registro fue Exitoso!!!</h2>
<h1>BIENVENIDO A NUESTRO OPEN HOUSE </h1>
<h2><?php echo $names; ?></h2>
<a href="ing_openhouse">Regresar al Inicio</a>

</div>
