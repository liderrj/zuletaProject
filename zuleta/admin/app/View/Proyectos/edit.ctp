<div class="proyectos form">
<?php echo $this->Form->create('Proyecto',array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Proyecto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo',array('label'=>'Título'));
		echo $this->Form->input('tematica',array('label'=>'Temática'));
		echo $this->Form->input('Categoria',array('label'=>'Categoría'));
		echo $this->Form->input('id_categoria',array('type'=>'hidden'));
		echo $this->Form->input('tipo', array(
    		'options' => array('Pasantía', 'Tesis')
		));
		echo $this->Form->input('autor');
		echo $this->Form->input('tutor');
		echo $this->Form->input('jurado');
		echo $this->Form->input('ubicacion',array('label'=>'Ubicación'));
		echo $this->Form->input('resumen');
		echo $this->Form->input('cota');
		echo $this->Form->input('ruta', array('type' => 'file'));
		echo $this->Form->input('fechaPresentacion',array('label'=>'Fecha de Presentación', 'dateFormat' => 'DMY'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Proyecto.id')), null, __('¿Esta seguro de borrar el proyecto %s?', $this->Form->value('Proyecto.titulo'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Proyectos'), array('action' => 'index')); ?></li>
	</ul>
</div>
