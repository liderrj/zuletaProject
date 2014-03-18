<div class="proyectos index">
	<h2><?php echo __('Proyectos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id',__('Id')); ?></th>
			<th><?php echo $this->Paginator->sort('titulo',__('Título')); ?></th>
			<th><?php echo $this->Paginator->sort('tematica',__('Temática')); ?></th>
			<th><?php echo $this->Paginator->sort('id_categoria', __('Categoría')); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('autor'); ?></th>
			<th><?php echo $this->Paginator->sort('tutor'); ?></th>
			<th><?php echo $this->Paginator->sort('ruta'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaPresentacion',__('Fecha de Presentación')); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($proyectos as $proyecto): ?>
	<tr>
		<td><?php echo h($proyecto['Proyecto']['id']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['tematica']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Categorium']['nombre']); ?>&nbsp;</td>
		<td><?php switch(h($proyecto['Proyecto']['tipo'])){
			case '0': echo "Pasantía"; break;
			case '1': echo "Tesis"; break;
		} ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['autor']); ?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['tutor']); ?>&nbsp;</td>
		<td><?php
				  echo $this->Html->link($proyecto['Proyecto']['ruta'], '/app/webroot/files/proyecto/ruta/'.$proyecto['Proyecto']['id'].'/'.$proyecto['Proyecto']['ruta'],array('target'=>'_blank'));
			?>&nbsp;</td>
		<td><?php echo h($proyecto['Proyecto']['fechaPresentacion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $proyecto['Proyecto']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $proyecto['Proyecto']['id']), null, __('¿Seguro desea borrar el proyecto %s?', $proyecto['Proyecto']['titulo'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('action' => 'add')); ?></li>
	</ul>
</div>
