	<div class="login" id="cuadro_login">
	<!--div id="cuadro_login2"-->
	<?php 
	$this->load->helper("form");
	$atrb = array('id' =>'cuadro_login2');
	echo form_open("index.php/login/redireccion",$atrb);
	?>
	<table  width="50%" align="center" >
	<tr>
	<td><img src="<?php echo base_url(); ?>style/imagenes/candado.png" border="0"></td>
	<td><table>
	<tr>
	<td>USUARIO</td>
	<td><input class="input_user" type="text" name="nick" id="nick" value=""></td>
	</tr>
	<tr>
	<td>CONTRASE&Ntilde;A</td>
	<td><input class="input_pass" type="password" name="pass" onkeypress="validar(event);" id="pass" value=""></td>
	</tr>
	<tr> <td colspan="2" align="right">
            <div class="demo">
				<input type="submit" value="INGRESAR" aria-disabled="false" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" name="aceptar" id="aceptar" type="button">
                <button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" name="aceptar" id="aceptar" type="reset"><span class="ui-button-text">LIMPIAR</span></button>
             </div>

        </td>
	</tr>
	</table></td>
	<td><img src="<?php echo base_url(); ?>style/imagenes/llave3.png" border="0"></td>
	</tr>			 
	</table id="tabla"><table>
	<tr><td colspan="3" align="center">
    <br/>
        <div id="mensaje_error_form_login" class="alerta" style="visibility: hidden;">
         <p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span> </p>
          </div>
		</td>
	</tr></table>
</form>
<!--/div-->
</div>
