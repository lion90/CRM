<script>
  $(function(){
    var autocompletar1 = new Array();
    var autocompletar2 = new Array();
    var autocompletar3 = new Array();
    var autocompletar4 = new Array();

	<?php
    foreach ($query1->result() as $fila)
		{   ?>
		    autocompletar1.push('<?php echo $fila->INSTITUTION_NAME; ?>');
 	<?php }  
    foreach ($query2->result() as $fila)
		{   ?>
		    autocompletar2.push('<?php echo $fila->VALUE_DESCRIPTION; ?>');
 	<?php } 
    foreach ($query3->result() as $fila)
		{   ?>
		    autocompletar3.push('<?php echo $fila->CAREER_NAME; ?>');
 	<?php }  
    foreach ($query4->result() as $fila)
		{   ?>
		    autocompletar4.push('<?php echo $fila->INSTITUTION_NAME; ?>');
 	<?php }  ?>
     //Esto es un poco de php para obtener lo que necesitamos
     
     $("#colegio").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar1 //Le decimos que nuestra fuente es el arreglo
     });
     $("#tecnico").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar2 //Le decimos que nuestra fuente es el arreglo
     });
     $("#carrera1").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar3 //Le decimos que nuestra fuente es el arreglo
     });
     $("#carrera2").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar3 //Le decimos que nuestra fuente es el arreglo
     });
     $("#universidad1").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar4 //Le decimos que nuestra fuente es el arreglo
     });
     $("#universidad2").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar4 //Le decimos que nuestra fuente es el arreglo
     });
  });
    </script> 
<form action="<?php base_url()?>digitador/dato_encuesta" method="POST">
<br>
<fieldset>
 		 <legend >Informaci&oacute;n General</legend>
 		 <label class="fieldLabel"  >Fecha:</label>
 		 <input class="formInputText" style="margin-left:110px;" type="text" name="fecha" id="fecha" value="" size="12" maxlength="10" tabindex="1"  />
 		 <img src="<?php echo base_url(); ?>style/imagenes/calen.png">		
 		 <br>
 		 <label class="fieldLabel"  >Instituto: </label>
 		 <input class="formInputText" tabindex="2" style="margin-left:95px;" type="text" name="colegio" id="colegio" value="" size="50" maxlength="50" />	
 		 <br>
 		 <label class="fieldLabel" style="margin-left:0px;" >Bachillerato(Opcion):</label>
		 <input class="formInputText" tabindex="3" style="margin-left:27px;" type="text" name="tecnico" id="tecnico" value="" size="50" maxlength="50" />	
		 <label class="fieldLabel" style="margin-left:0px; font-size:9px;" >Ej: General, Tecnico en computacion, etc</label>
		<br>
		<br>
</fieldset>
<br>
<fieldset>
 		 <legend >Informaci&oacute;n Personal</legend>
 		 <label class="fieldLabel"  >Nombre:</label>
 		 <input class="formInputText" tabindex="4" style="margin-left:135px;" type="text" name="nombre" id="nombre" value="" size="50" maxlength="50" />	
 		 <br>
 		 <label class="fieldLabel"  >Email:</label>
 		 <input class="formInputText" tabindex="5" style="margin-left:148px;" type="text" name="email" id="email" value="" size="50" maxlength="50"  />
 		 <br>
 		 <label class="fieldLabel"  >Direccion:</label>
 		 <input class="formInputText" tabindex="6" style="margin-left:125px;" type="text" name="direccion" id="direccion" value="" size="50" maxlength="50"   />
 		 <br>
 		 <label class="fieldLabel"  >Nombre del Padre o Madre:</label>
 		 <input class="formInputText" tabindex="7" style="margin-left:27px;" type="text" name="nombrefamilia" id="nombrefamilia" value="" size="50" maxlength="50"   />
 		 <label class="fieldLabel" style="margin-left:25px;" >Tel:</label>
 		 <input class="formInputText" tabindex="8" style="margin-left:1px;" type="text" name="tel" id="tel" value="" size="10" maxlength="8"  />
 		 <br>
 		 <label class="fieldLabel"  >Lugar de trabajo:</label>
 		 <input class="formInputText" tabindex="9" style="margin-left:85px;" type="text" name="trabajo" id="trabajo" value="" size="50" maxlength="50"   />		
 		 <br>
 		 <br>
</fieldset> 
<br/>
<fieldset>
 		 <legend >Informaci&oacute;n</legend>
 		 <label class="fieldLabel"  >Carreras que te gustaria estudiar:</label>
 		 <label class="fieldLabel"  style="margin-left:36px;">Op. 1</label>
 		 <input class="formInputText" tabindex="10" style="margin-left:0px;" type="text" name="carrera1" id="carrera1" value="" size="50" maxlength="50" />	
		 <br>
		 <label class="fieldLabel"  style="margin-left:239px;">Op. 2</label>
		 <input class="formInputText" tabindex="11" style="margin-left:0px;" type="text" name="carrera2" id="carrera2" value="" size="50" maxlength="50" />	
 		 <br><br>
 		 <label class="fieldLabel"  >En que universidad le gustaria estudiar:</label>
 		 <label class="fieldLabel"  >Op. 1</label>
 		 <input class="formInputText" tabindex="12" style="margin-left:0px;" type="text" name="universidad1" id="universidad1" value="" size="50" maxlength="50" />	
		 <br>
		 <label class="fieldLabel"  style="margin-left:239px;">Op. 2</label>
		 <input class="formInputText" tabindex="13" style="margin-left:0px;" type="text" name="universidad2" id="universidad2" value="" size="50" maxlength="50" />	
 		 <br><br>
 		 <label class="fieldLabel"  >¿Que has escuchado de la UDB?</label>
 		 <br>
 		 <input tabindex="16" style="margin-left:25px;" type="checkbox" name="escuchado[]" id="escuchado" value="calidad docente"  />
 		 <label class="fieldLabel"  >Calidad Docente</label>
 		 <input tabindex="17" style="margin-left:49px;" type="checkbox" name="escuchado[]" id="escuchado" value="formacion cristiana" />
 		 <label class="fieldLabel"  >Formacion Cristiana</label>
 		 <input tabindex="18" style="margin-left:52px;" type="checkbox" name="escuchado[]" id="escuchado" value="tecnologia" />
 		 <label class="fieldLabel"  >Tecnologia</label>
 		 <input tabindex="19" style="margin-left:25px;" type="checkbox" name="escuchado[]" id="escuchado" value="acreditacion" />
 		 <label class="fieldLabel"  >Acreditacion</label>
 		 <br>
 		 <input tabindex="20" style="margin-left:25px;" type="checkbox" name="escuchado[]" id="escuchado" value="carreras inovadoras"  />
 		 <label class="fieldLabel"  >Carreras Innovadoras</label>
 		 <input tabindex="21" style="margin-left:25px;" type="checkbox" name="escuchado[]" id="escuchado" value="laboratorio de avanzada" />
 		 <label class="fieldLabel"  >Laboratoria de Avanzada</label>
 		 <input tabindex="22" style="margin-left:25px;" type="checkbox" name="escuchado[]" id="escuchado" value="otras" />
 		 <label class="fieldLabel"  >Otras</label>
 		 <input tabindex="23" style="margin-left:57px;" type="checkbox" name="escuchado[]" id="escuchado" value="nada" />
 		 <label class="fieldLabel"  >Nada</label>
 		 <br><br>
 		 <label class="fieldLabel"  >¿Que aspectos publicitarios y de promocion conoce de la UDB?</label>
 		 <br>
 		 <input tabindex="24" style="margin-left:25px;" type="checkbox" name="publici[]" id="publici"  />
 		 <label class="fieldLabel"  >Radio</label>
 		 <input tabindex="25" style="margin-left:25px;" type="checkbox" name="publici[]" id="publici"  />
 		 <label class="fieldLabel"  >Vallas publicitarias </label>
 		 <input tabindex="26" style="margin-left:25px;" type="checkbox" name="publici[]" id="publici"  />
 		 <label class="fieldLabel"  >Prensa</label>
 		 <input tabindex="27" style="margin-left:25px;" type="checkbox" name="publici[]" id="publici"  />
 		 <label class="fieldLabel"  >Vistitas a Colegios</label>
 		 <input tabindex="28" style="margin-left:25px;" type="checkbox" name="publici[]" id="publici"  />
 		 <label class="fieldLabel"  >TV</label>
 		 <input tabindex="29" style="margin-left:25px;" type="checkbox" name="publici[]" id="publici"  />
 		 <label class="fieldLabel"  >Otras</label>
 		 <br><br>
 		 <label class="fieldLabel"  >¿Como calificarias la guia vocacional recibida este dia?</label>
 		 <br>
 		 <input class="fieldLabel" tabindex="30" style="margin-left:0px;" type="radio"  name="group2"  value="opcion1">
	     <label class="fieldLabel" >Excelente</label>
	 	 <input class="fieldLabel" tabindex="31" style="margin-left:0px;" type="radio"  name="group2"  value="opcion2">
		 <label class="fieldLabel" >Muy Buena</label>
		 <input class="fieldLabel" tabindex="32" style="margin-left:0px;" type="radio"  name="group2"  value="opcion3">
	     <label class="fieldLabel" >Buena</label>
	 	 <input class="fieldLabel" tabindex="33" style="margin-left:0px;" type="radio"  name="group2"  value="opcion4">
		 <label class="fieldLabel" >Mala</label>
		 <br>
		 <br>

		 <center><input type="submit" id="ingresar_encuesta" value="Ingresar"/></center>
</fieldset>
<br>
</form>