<div class="categoria index">
	<h2><?php echo __('Categorías'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($categoria as $categorium): ?>
	<tr>
		<td><?php echo h($categorium['Categorium']['id']); ?>&nbsp;</td>
		<td><?php echo h($categorium['Categorium']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $categorium['Categorium']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $categorium['Categorium']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $categorium['Categorium']['id']), null, __('¿Esta seguro de borrar la categoría %s?', $categorium['Categorium']['nombre'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Categoría'), array('action' => 'add')); ?></li>
	</ul>
</div>
