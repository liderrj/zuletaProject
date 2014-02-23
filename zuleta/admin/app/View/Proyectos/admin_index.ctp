<div class="proyectos index">
	<h2><?php echo __('Proyectos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('tematica'); ?></th>
			<th><?php echo $this->Paginator->sort('id_categoria'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('autor'); ?></th>
			<th><?php echo $this->Paginator->sort('tutor'); ?></th>
			<th><?php echo $this->Paginator->sort('jurado'); ?></th>
			<th><?php echo $this->Paginator->sort('ubicacion'); ?></th>
			<th><?php echo $this->Paginator->sort('resumen'); ?></th>
			<th><?php echo $this->Paginator->sort('cota'); ?></th>
			<th><?php echo $this->Paginator->sort('ruta'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaPresentacion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proyectos as $proyecto): ?>
	<tr>
		<td><?php echo h($proyecto['Proyecto']['id']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['tematica']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['id_categoria']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['autor']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['tutor']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['jurado']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['ubicacion']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['resumen']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['cota']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['ruta']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['fechaPresentacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proyecto['Proyecto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proyecto['Proyecto']['id']), null, __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('action' => 'add')); ?></li>
	</ul>
</div>
