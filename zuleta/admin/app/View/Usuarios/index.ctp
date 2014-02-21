<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id','Código'); ?></th>
			<th><?php echo $this->Paginator->sort('login','Usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('nombreCompleto','Nombre Completo'); ?></th>
			<th><?php echo $this->Paginator->sort('tipoUsuario', 'Tipo de Usuario'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['login']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['nombreCompleto']); ?>&nbsp;</td>
		<td><?php switch(h($usuario['Usuario']['tipoUsuario'])){
						case '0': echo 'Inactivo'; break;
						case '1': echo 'Usuario'; break;
						case '2': echo 'Administrador'; break;
						} ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Esta seguro de borrar el elemento # %s?', $usuario['Usuario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count}, desde {:start}, hasta {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previo'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?></li>
	</ul>
</div>
