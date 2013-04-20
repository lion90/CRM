<html>
<head>
<title>Upload Form</title>
</head>
<body>


<?php

	echo "<h3>Archivo Subido Exitosamente</h3>";
 	echo "<div>Nombre del Archivo Cargado :</div>";
 	echo "<div>Extension del Archivo Cargado :</div>";
 	echo "<div>Error :".$info."</div>";

?>

<p><?php echo anchor('prueba', 'Upload Another File!'); ?></p>

</body>
</html>