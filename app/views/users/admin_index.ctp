<div class="users_index">
	<h2><?php __('Usuarios');?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('Rol', 'role_id');?></th>
			<th><?php echo $this->Paginator->sort('Usuario', 'username');?></th>
			<th><?php echo $this->Paginator->sort('Correo Electrónico', 'email');?></th>
			<th class="actions"><?php __('Acciones');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($users as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['Role']['name']; ?>&nbsp;</td>
			<td><?php echo $user['User']['username']; ?>&nbsp;</td>
			<td><?php echo $user['User']['email']; ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $user['User']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
		));
		?>
	</p>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>