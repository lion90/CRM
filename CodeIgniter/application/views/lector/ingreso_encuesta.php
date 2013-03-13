<div id="menu">
	<br>
<fieldset>
 		 <legend >Informaci&oacute;n General</legend>
 		 <label class="fieldLabel"  >Fecha:</label>
 		 <input class="formInputText" style="margin-left:40px;" type="text" name="fecha" id="fecha" value="" size="12" maxlength="10" tabindex="1"  />
 		 <img src="<?php echo base_url(); ?>style/imagenes/calen.png">		
 		 <br>
 		 <input class="fieldLabel" tabindex="3" style="margin-left:490px;" type="radio" name="group1" value="general">
 		 <label class="fieldLabel"  >General</label><br>
 		 <label class="fieldLabel"  >Instituto: </label>
 		 <select class="formSelect" style="margin-left:26px; width:300px;" name="instituto" id="instituto" size="" tabindex="2"
	          onchange="chooseCountry(this.options[this.selectedIndex].text,'state')">
 		 	<option>Instituto Nacional Texistepeque</option>
 		 	<option>Instituto Tecnico de Exalumnos Salesianos</option>
 		 	<option>Instituto Tecnico Ricaldone</option>
 		 	<option>Instituto Tecnologico de Chalatenango ITCHA</option>
 		 	<option>Instituto Tecnologico de Usulutan ITU</option>
 		 	<option>Instituto Tecnologico Centroamericano El Salvador</option>
 		 	<option>Colegio Angloamericano</option>
 		 </select>
 		 <label class="fieldLabel" style="margin-left:10px;" >Bachillerato:</label>
		<br>
		
		
		<input class="fieldLabel" tabindex="4" style="margin-left:490px;" type="radio"  name="group1"  value="opcion">
		<label class="fieldLabel" >Tecnico</label>
		<label class="fieldLabel" >Opcion:</label>
		<select class="formSelect" name="opcion" id="opcion" size="1" tabindex="5"
	          onchange="chooseCountry(this.options[this.selectedIndex].text,'state')">
			<option>Automotriz</option>
			<option>Contaduria Publica</option>
			<option>Electronica</option>
			<option>Electricidad</option>
		</select>
		<br>
		<br>
</fieldset>
<br>
<fieldset>
 		 <legend >Informaci&oacute;n Personal</legend>
 		 <label class="fieldLabel"  >Nombre:</label>
 		 <input class="formInputText" tabindex="6" style="margin-left:135px;" type="text" name="nombre" id="nombre" value="" size="50" maxlength="50" />	
 		 <br>
 		 <label class="fieldLabel"  >Email:</label>
 		 <input class="formInputText" tabindex="7" style="margin-left:148px;" type="text" name="email" id="email" value="" size="50" maxlength="50"  />
 		 <br>
 		 <label class="fieldLabel"  >Direccion:</label>
 		 <input class="formInputText" tabindex="8" style="margin-left:125px;" type="text" name="direccion" id="direccion" value="" size="50" maxlength="50"   />
 		 <br>
 		 <label class="fieldLabel"  >Nombre del Padre o Madre:</label>
 		 <input class="formInputText" tabindex="9" style="margin-left:27px;" type="text" name="nombrefamilia" id="nombrefamilia" value="" size="50" maxlength="50"   />
 		 <label class="fieldLabel" style="margin-left:25px;" >Tel:</label>
 		 <input class="formInputText" tabindex="10" style="margin-left:1px;" type="text" name="tel" id="tel" value="" size="10" maxlength="8"  />
 		 <br>
 		 <label class="fieldLabel"  >Lugar de trabajo:</label>
 		 <input class="formInputText" tabindex="11" style="margin-left:85px;" type="text" name="trabajo" id="trabajo" value="" size="50" maxlength="50"   />		
 		 <br>
 		 <br>
</fieldset> 
<br/>
<fieldset>
 		 <legend >Informaci&oacute;n</legend>
 		 <label class="fieldLabel"  >Carreras que te gustaria estudiar:</label>
 		 <label class="fieldLabel"  style="margin-left:36px;">Op. 1</label>
 		 <select class="formSelect" name="opcioncarrera" id="opcioncarrera1" size="1" tabindex="12"
	          onchange="chooseCountry(this.options[this.selectedIndex].text,'state')">
			<option>Ingenieria en ciencias de la computacion</option>
			<option>Ingenieria en ciencias </option>
			<option>Ingenieria en computacion</option>
		</select>
		<br>
		<label class="fieldLabel"  style="margin-left:239px;">Op. 2</label>
		<select class="formSelect" name="opcioncarrera" id="opcioncarrera2" size="1" tabindex="13"
	          onchange="chooseCountry(this.options[this.selectedIndex].text,'state')">
			<option>Ingenieria en ciencias de la computacion</option>
			<option>Ingenieria en ciencias </option>
			<option>Ingenieria en computacion</option>
		</select>
 		 <br><br>
 		 <label class="fieldLabel"  >En que universidad le gustaria estudiar:</label>
 		 <label class="fieldLabel"  >Op. 1</label>
 		 <select class="formSelect" name="opcionu" id="opcionu1" size="1" tabindex="14"
	          onchange="chooseCountry(this.options[this.selectedIndex].text,'state')">
			<option>Ingenieria en ciencias de la computacion</option>
			<option>Ingenieria en ciencias </option>
			<option>Ingenieria en computacion</option>
		</select>
		<br>
		<label class="fieldLabel"  style="margin-left:239px;">Op. 2</label>
		<select class="formSelect" name="opcionu" id="opcionu2" size="1" tabindex="15"
	          onchange="chooseCountry(this.options[this.selectedIndex].text,'state')">
			<option>Ingenieria en ciencias de la computacion</option>
			<option>Ingenieria en ciencias </option>
			<option>Ingenieria en computacion</option>
		</select>
 		 <br><br>
 		 <label class="fieldLabel"  >¿Que has escuchado de la UDB?</label>
 		 <br>
 		 <input tabindex="16" style="margin-left:25px;" type="checkbox" name="escuchado" id="escuchado1"  />
 		 <label class="fieldLabel"  >Calidad Docente</label>
 		 <input tabindex="17" style="margin-left:49px;" type="checkbox" name="escuchado" id="escuchado2"  />
 		 <label class="fieldLabel"  >Formacion Cristiana</label>
 		 <input tabindex="18" style="margin-left:52px;" type="checkbox" name="escuchado" id="escuchado3"  />
 		 <label class="fieldLabel"  >Tecnologia</label>
 		 <input tabindex="19" style="margin-left:25px;" type="checkbox" name="escuchado" id="escuchado4"  />
 		 <label class="fieldLabel"  >Acreditacion</label>
 		 <br>
 		 <input tabindex="20" style="margin-left:25px;" type="checkbox" name="escuchado" id="escuchado5"  />
 		 <label class="fieldLabel"  >Carreras Innovadoras</label>
 		 <input tabindex="21" style="margin-left:25px;" type="checkbox" name="escuchado" id="escuchado6"  />
 		 <label class="fieldLabel"  >Laboratoria de Avanzada</label>
 		 <input tabindex="22" style="margin-left:25px;" type="checkbox" name="escuchado" id="escuchado7"  />
 		 <label class="fieldLabel"  >Otras</label>
 		 <input tabindex="23" style="margin-left:57px;" type="checkbox" name="escuchado" id="escuchado8"  />
 		 <label class="fieldLabel"  >Nada</label>
 		 <br><br>
 		 <label class="fieldLabel"  >¿Que aspectos publicitarios y de promocion conoce de la UDB?</label>
 		 <br>
 		 <input tabindex="24" style="margin-left:25px;" type="checkbox" name="publici" id="publici1"  />
 		 <label class="fieldLabel"  >Radio</label>
 		 <input tabindex="25" style="margin-left:25px;" type="checkbox" name="publici" id="publici2"  />
 		 <label class="fieldLabel"  >Vallas publicitarias </label>
 		 <input tabindex="26" style="margin-left:25px;" type="checkbox" name="publici" id="publici3"  />
 		 <label class="fieldLabel"  >Prensa</label>
 		 <input tabindex="27" style="margin-left:25px;" type="checkbox" name="publici" id="publici4"  />
 		 <label class="fieldLabel"  >Vistitas a Colegios</label>
 		 <input tabindex="28" style="margin-left:25px;" type="checkbox" name="publici" id="publici5"  />
 		 <label class="fieldLabel"  >TV</label>
 		 <input tabindex="29" style="margin-left:25px;" type="checkbox" name="publici" id="publici6"  />
 		 <label class="fieldLabel"  >Otras</label>
 		 <br><br>
 		 <label class="fieldLabel"  >¿Como calificarias la guia vocacional recibida este dia?</label>
 		 <br>
 		 <input class="fieldLabel" tabindex="30" style="margin-left:0px;" type="radio"  name="group2"  value="opcion1">
	     <label class="fieldLabel" >Excelente</label>
	 	 <input class="fieldLabel" tabindex="31" style="margin-left:0px;" type="radio"  name="group2"  value="opcion2">
		 <label class="fieldLabel" >Nuy Buena</label>
		 <input class="fieldLabel" tabindex="32" style="margin-left:0px;" type="radio"  name="group2"  value="opcion3">
	     <label class="fieldLabel" >Buena</label>
	 	 <input class="fieldLabel" tabindex="33" style="margin-left:0px;" type="radio"  name="group2"  value="opcion4">
		 <label class="fieldLabel" >Mala</label>
		 <br>
		 <br>
</fieldset>
</div>
