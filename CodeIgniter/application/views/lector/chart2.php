<div id="chart">
	<div style="padding-bottom:1000px"></div>
<?php
$carreras="";
$op1="";
$op2="";
$query= $this->crm_read_model->conteo_opcion_carreras();
foreach ($query as $row)
{
	$carreras=$carreras.",".$row['CARRERAS'];
	$op1=$op1.",".$row["OPCION1"];
	$op2=$op2.",".$row["OPCION2"];
}
$carreras=substr($carreras, 1);
$op1=substr($op1, 1);
$op2=substr($op2, 1);
echo "<script> graphic2('$op1','$op2','$carreras');</script>";

?>	
</div>