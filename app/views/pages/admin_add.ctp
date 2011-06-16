<div class="pages">
<?php echo $this->Form->create('Page');?>
	<fieldset>
 		<legend><?php __('Nueva Página'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('slug');
		echo $this->Form->input('content',array("name"=>"data[Page][content]"));
		

	?>
	</fieldset>
<?php echo $this->Form->end("Guardar");?>
	
</div>

<script type="text/javascript">
					CKEDITOR.replace( 'data[Page][content]',{
        				filebrowserUploadUrl : '/gps/upload.php',
        				filebrowserBrowseUrl : '/gps/admin/images/wysiwyg',


					} );
	
</script>