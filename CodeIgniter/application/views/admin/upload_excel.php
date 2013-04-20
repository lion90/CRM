

<?php echo form_open_multipart('index.php/administrador/do_upload');?>
<fieldset style="width:500px">
<legend>Upload</legend>
<br />
<div><?php echo $error?></div>
<label>Selecione archivo de excel:</label>
<input type="file" style="width:300px" name="userfile" size="20" />

<center>
<br /><br />
<input  type="submit"  value="Upload" />
</center>
</fieldset>

</form>
