<?php 
 $names=$_POST['names'];
 $surname=$_POST['surname'];
 $institution=$_POST['institution'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $medio=$_POST['medio'];
 $id=$_POST['idcust'];

 $query=$this->crm_model->update_open($id,$names,$surname,$institution,$phone,$email,$medio);
?>
<div id="content">

<h2>Su Registro fue Exitoso!!!</h2>
<h1>BIENVENIDO A NUESTRO OPEN HOUSE </h1>
<h2><?php echo strtoupper($names); ?></h2>
<a href="ing_openhouse">Regresar al Inicio</a>

</div>

