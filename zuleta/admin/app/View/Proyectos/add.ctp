<div class="proyectos form">
<?php echo $this->Form->create('Proyecto'); ?>
	<fieldset>
		<legend><?php echo __('Add Proyecto'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('tematica');
		echo $this->Form->input('id_categoria');
		echo $this->Form->input('tipo');
		echo $this->Form->input('autor');
		echo $this->Form->input('tutor');
		echo $this->Form->input('jurado');
		echo $this->Form->input('ubicacion');
		echo $this->Form->input('resumen');
		echo $this->Form->input('cota');
		echo $this->Form->input('ruta', array('type' => 'file'));
		echo $this->Form->input('fechaPresentacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proyectos'), array('action' => 'index')); ?></li>
	</ul>
</div>
