<div class="categoria form">
<?php echo $this->Form->create('Categorium'); ?>
	<fieldset>
		<legend><?php echo __('Editar Categoría'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Categorium.id')), null, __('¿Esta segurado de borrar la categoría %s?', $this->Form->value('Categorium.nombre'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Categoria'), array('action' => 'index')); ?></li>
	</ul>
</div>
