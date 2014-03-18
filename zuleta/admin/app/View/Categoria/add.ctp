<div class="categoria form">
<?php echo $this->Form->create('Categorium'); ?>
	<fieldset>
		<legend><?php echo __('Crear Categoría'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Categorías'), array('action' => 'index')); ?></li>
	</ul>
</div>
