 <script type="text/javascript"> 
 function validar(e) {
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==13) {validar_usuario();}
}
 function validar_usuario()
{
    
    var nick = $("#nick").val();
    var pass = $("#pass").val();
    
    $.ajax
    ({ 
    	type: "POST",
        url: "index.php/login/redireccion",
        data: 'nick='+nick +'&'+ 'pass='+pass,
        success: function(data) 
        {   
            var obj = jQuery.parseJSON(data);
            var bandera = obj.bandera;
            var msj     = obj.mensaje;

            switch(bandera)
            {
                case 1:
                    var modulo = obj.nivel;
                    location.href = modulo;
                    break;
                    
               default:
                    document.getElementById('mensaje_error_form_login').style.visibility='visible';
                        
                    break;
                }

        },
        error: function(xml,msg)
        {
            document.getElementById('mensaje_error_form_login').style.visibility='visible';
        }
    });  
}
</script>
<?php 

	?>
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
	<td><input class="input_user" type="text" name="nick" id="nick" value="" required><br></td>
	</tr>
	<tr>
	<td>CONTRASE&Ntilde;A</td>
	<td><input class="input_pass" type="password" name="pass" onkeypress="validar(event);" id="pass" value="" required></td>
	</tr>
	<tr> <td colspan="2" align="right">
            <div class="demo">
				<input type="button" onclick="validar_usuario()" value="INGRESAR" aria-disabled="false" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" name="aceptar" id="aceptar" type="button">
                <button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" name="aceptar" id="aceptar" type="reset"><span class="ui-button-text">LIMPIAR</span></button>
             </div>

        </td>
	</tr>
	<tr><td colspan="2" align="right">
    
        <div id="mensaje_error_form_login" style="visibility: hidden; color:red; font-size:15px;">
         Usuario o Contrase&ntilde;a Incorrecta
          </div>
		</td>
	</tr>
	</table></td>
	<td><img src="<?php echo base_url(); ?>style/imagenes/llave3.png" border="0"></td>
	</tr>			 
	</table id="tabla">
</form>
<!--/div-->
</div>



