<div class="news_form">
<?php echo $this->Form->create('News');?>
	<fieldset>
		<legend><?php __('Añadir Noticia'); ?></legend>
	<?php
		echo $this->Form->input('title', array('label' => 'Título'));
		echo $this->Form->input('description', array('label' => 'Descripción'));
		echo $this->Form->input('content', array('label' => 'Contenido'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Añadir Noticia', true));?>
</div>