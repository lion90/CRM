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
     <input class="formInputText" required style="margin-left:110px;" type="date" name="fecha" id="fecha" value="" size="12" maxlength="10"  />
     <img src="<?php echo base_url(); ?>style/imagenes/calen.png"> 
     <label class="fieldLabel" color="red" style="margin-left:0px; font-size:9px; color:red;" >(*)</label>   
     <br>
     <label class="fieldLabel"  >Instituto: </label>
     <input class="formInputText"  required style="margin-left:95px;" type="text" name="colegio" id="colegio" value="" size="50" maxlength="50" /> 
     <label class="fieldLabel" color="red" style="margin-left:0px; font-size:9px; color:red;" >(*)</label>
     <br>
     <label class="fieldLabel" style="margin-left:0px;" >Bachillerato(Opcion):</label>
     <input class="formInputText"  style="margin-left:27px;" type="text" name="tecnico" id="tecnico" value="" size="50" maxlength="50" /> 
     <label class="fieldLabel" style="margin-left:0px; font-size:9px;" >Ej: General, Tecnico en computacion, etc</label>

    <br>
    <br>
</fieldset>
<br>
<fieldset>
     <legend >Informaci&oacute;n Personal</legend>
     <label class="fieldLabel"  >Nombre:</label>
     <input class="formInputText"  required style="margin-left:135px;" type="text" name="nombre" id="nombre" value="" size="50" maxlength="50" />  
     <label class="fieldLabel" color="red" style="margin-left:0px; font-size:9px; color:red;" >(*)</label>
     <br>
     <label class="fieldLabel"  >Email:</label>
     <input class="formInputText"  required style="margin-left:148px;" type="text" name="email" id="email" value="" size="50" maxlength="50"  />
     <label class="fieldLabel" color="red" style="margin-left:0px; font-size:9px; color:red;" >(*)</label>
     <label class="fieldLabel" style="margin-left:45px;" >Tel:</label>
     <input class="formInputText" required  style="margin-left:1px;" type="text" name="tel" id="tel" value="" size="10" maxlength="8"  />
     <label class="fieldLabel" color="red" style="margin-left:0px; font-size:9px; color:red;" >(*)</label>
     <br>
     <label class="fieldLabel"  >Direccion:</label>
     <input class="formInputText" style="margin-left:125px;" type="text" name="direccion" id="direccion" value="" size="50" maxlength="50"   />
     <br>
     <label class="fieldLabel"  >Nombre del Padre o Madre:</label>
     <input class="formInputText"  style="margin-left:27px;" type="text" name="nombrefamilia" id="nombrefamilia" value="" size="50" maxlength="50"   />
     <label class="fieldLabel" style="margin-left:25px;" >Tel Trabajo:</label>
     <input class="formInputText"  style="margin-left:1px;" type="text" name="teltrabajo" id="teltrabajo" value="" size="10" maxlength="8"  />
     <br>
     <label class="fieldLabel"  >Email del Padre o Madre:</label>
     <input class="formInputText"  style="margin-left:39px;" type="text" name="emailpa" id="emailpa" value="" size="50" maxlength="50"   />   
     <br>
     <label class="fieldLabel"  >Lugar de trabajo:</label>
     <input class="formInputText"  style="margin-left:85px;" type="text" name="trabajo" id="trabajo" value="" size="50" maxlength="50"   />   
     <br>
     <br>
</fieldset> 
<br/>
<fieldset>
     <legend >Informaci&oacute;n</legend>
     <label class="fieldLabel"  >Carreras que te gustaria estudiar:</label>
     <label class="fieldLabel"  style="margin-left:36px;">Op. 1</label>
     <input class="formInputText" required  style="margin-left:0px;" type="text" name="carrera1" id="carrera1" value="" size="50" maxlength="50" /> 
     <label class="fieldLabel" color="red" style="margin-left:0px; font-size:9px; color:red;" >(*)</label>
     <br>
     <label class="fieldLabel"  style="margin-left:239px;">Op. 2</label>
     <input class="formInputText" required  style="margin-left:0px;" type="text" name="carrera2" id="carrera2" value="" size="50" maxlength="50" /> 
     <label class="fieldLabel" color="red" style="margin-left:0px; font-size:9px; color:red;" >(*)</label>
     <br><br>
     <label class="fieldLabel"  >En que universidad le gustaria estudiar:</label>
     <label class="fieldLabel"  >Op. 1</label>
     <input class="formInputText" required  style="margin-left:0px;" type="text" name="universidad1" id="universidad1" value="" size="50" maxlength="50" />
     <label class="fieldLabel" color="red" style="margin-left:0px; font-size:9px; color:red;" >(*)</label> 
     <br>
     <label class="fieldLabel"  style="margin-left:239px;">Op. 2</label>
     <input class="formInputText" required  style="margin-left:0px;" type="text" name="universidad2" id="universidad2" value="" size="50" maxlength="50" /> 
     <label class="fieldLabel" color="red" style="margin-left:0px; font-size:9px; color:red;" >(*)</label>
     <br><br>
     <label class="fieldLabel"  >¿Que has escuchado de la UDB?</label>
     <br>
     <input  style="margin-left:25px;" type="checkbox" name="escuchado1" id="escuchado1" value="x"  />
     <label class="fieldLabel"  >Calidad Docente</label>
     <input  style="margin-left:49px;" type="checkbox" name="escuchado2" id="escuchado2" value="x" />
     <label class="fieldLabel"  >Formacion Cristiana</label>
     <input  style="margin-left:52px;" type="checkbox" name="escuchado3" id="escuchado3" value="x" />
     <label class="fieldLabel"  >Tecnologia</label>
     <input  style="margin-left:25px;" type="checkbox" name="escuchado4" id="escuchado4" value="x" />
     <label class="fieldLabel"  >Acreditacion</label>
     <br>
     <input  style="margin-left:25px;" type="checkbox" name="escuchado5" id="escuchado5" value="x"  />
     <label class="fieldLabel"  >Carreras Innovadoras</label>
     <input  style="margin-left:25px;" type="checkbox" name="escuchado6" id="escuchado6" value="x" />
     <label class="fieldLabel"  >Laboratoria de Avanzada</label>
     <input  style="margin-left:25px;" type="checkbox" name="escuchado7" id="escuchado7" value="x" />
     <label class="fieldLabel"  >Otras</label>
     <input  style="margin-left:57px;" type="checkbox" name="escuchado8" id="escuchado8" value="x" />
     <label class="fieldLabel"  >Nada</label>
     <br><br>
     <label class="fieldLabel"  >¿Que aspectos publicitarios y de promocion conoce de la UDB?</label>
     <br>
     <input  style="margin-left:25px;" type="checkbox" name="publici1" id="publici1" value="x"  />
     <label class="fieldLabel"  >Radio</label>
     <input  style="margin-left:25px;" type="checkbox" name="publici2" id="publici1" value="x"  />
     <label class="fieldLabel"  >Vallas publicitarias </label>
     <input  style="margin-left:25px;" type="checkbox" name="publici3" id="publici1" value="x"  />
     <label class="fieldLabel"  >Prensa</label>
     <input  style="margin-left:25px;" type="checkbox" name="publici4" id="publici1" value="x"  />
     <label class="fieldLabel"  >Vistitas a Colegios</label>
     <input  style="margin-left:25px;" type="checkbox" name="publici5" id="publici1" value="x" />
     <label class="fieldLabel"  >TV</label>
     <input  style="margin-left:25px;" type="checkbox" name="publici6" id="publici1" value="x"  />
     <label class="fieldLabel"  >Otras</label>
     <br><br>
     <label class="fieldLabel"  >¿Como calificarias la guia vocacional recibida este dia?</label>
     <br>
     <input class="fieldLabel"  style="margin-left:0px;" type="radio"  name="group1"  value="Excelente">
       <label class="fieldLabel" >Excelente</label>
     <input class="fieldLabel"  style="margin-left:0px;" type="radio"  name="group1"  value="Muy Buena">
     <label class="fieldLabel" >Muy Buena</label>
     <input class="fieldLabel"  style="margin-left:0px;" type="radio"  name="group1"  value="Buena">
       <label class="fieldLabel" >Buena</label>
     <input class="fieldLabel"  style="margin-left:0px;" type="radio"  name="group1"  value="Mala">
     <label class="fieldLabel" >Mala</label>
     <br>
     <br>

     <center><input type="submit" id="ingresar_encuesta" value="Ingresar"/></center>
</fieldset>
<br>
</form>