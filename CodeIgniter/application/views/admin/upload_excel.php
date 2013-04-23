<?php echo form_open_multipart('index.php/administrador/do_upload');?>
<fieldset style="width:500px ">
<legend>Upload</legend>
<br />
<div style="color:black; "><center><?php echo $error?></div>
<label>Selecione archivo de excel:</label>
<input type="file" style="width:300px" name="userfile" size="20" />

<center>
<br /><br />
<input  id="up" type="submit"  value="Upload" />
</center>
<div><center>

<p><?php echo anchor('index.php/1', 'Cancelar!'); ?></p>

</div>
</fieldset>

</form>

