<div class="users_form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Modificar Usuario'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('username', array("label" => "Usuario"));
			echo $this->Form->input('password', array("label" => "Contraseña"));
			echo $this->Form->input('email', array("label" => "Correo Electrónico"));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Modificar', true));?>
</div>
