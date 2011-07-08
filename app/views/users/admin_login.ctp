<div class="login">
	<?php echo $session->flash('auth');?>
	<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Acceso al CMS'); ?></legend>
		<?php
			echo $this->Form->input('username', array('label'=>'Usuario'));
			echo $this->Form->input('password', array('label'=>'Contraseña'));
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Ingresar', true));?>
</div>