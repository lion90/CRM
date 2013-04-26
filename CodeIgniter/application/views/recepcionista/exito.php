<?php 
 $names=trim($_POST['names']);
 $surname=trim($_POST['surname']);
 $institution=trim($_POST['institution']);
 $phone=trim($_POST['phone']);
 $email=trim($_POST['email']);
 $medio=$_POST['medio'];

$query=$this->crm_model->insert_open($names,$surname,$institution,$phone,$email,$medio);
?>

<div id="auto" style="margin-top: 150px;">

<h2>Su Registro fue Exitoso!!!</h2>

<a href="ingresar_cliente">Regresar al Inicio</a>

</div>