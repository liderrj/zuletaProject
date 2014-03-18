<div class="categoria view">
<h2><?php echo __('Categoría'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categorium['Categorium']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($categorium['Categorium']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Categoría'), array('action' => 'edit', $categorium['Categorium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Borrar Categoría'), array('action' => 'delete', $categorium['Categorium']['id']), null, __('Are you sure you want to delete # %s?', $categorium['Categorium']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Categorías'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Categoría'), array('action' => 'add')); ?> </li>
	</ul>
</div>
