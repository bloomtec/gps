<div class="users ">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Admin Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('role_id');
		echo $this->Form->input('username');
		echo $this->Form->input('password2',array("label"=>"password","type"=>"password"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
