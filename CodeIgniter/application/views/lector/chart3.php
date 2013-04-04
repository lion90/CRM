<div id="chart">
	<h1 style="padding-bottom:500px"></h1>
<?php
$universidad="";
$op1="";
$op2="";
$query= $this->crm_read_model->conteo_opcion_universidades();
foreach ($query as $row)
{
	$universidad=$universidad.",".$row['UNIVERSIDAD'];
	$op1=$op1.",".$row["OPCION1"];
	$op2=$op2.",".$row["OPCION2"];
}
$universidad=substr($universidad, 1);
$op1=substr($op1, 1);
$op2=substr($op2, 1);
echo "<script> graphic3('$op1','$op2','$universidad');</script>";

?>	
</div>