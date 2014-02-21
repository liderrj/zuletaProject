<div class="usuarios form">
<?php echo $this->Form->create('Usuario',array(
'onsubmit'=>'return validarClave()'
)); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Usuario'); ?></legend>
	<?php
		echo $this->Form->input('login',array('label'=>'Usuario'));
		echo $this->Form->input('nombreCompleto');
		echo $this->Form->input('tipoUsuario',
			array(
			'label'=>'Tipo de Usuario',
			'options' => array('Inactivo','Usuario','Administrador')
			)
			);
		echo $this->Form->input('clave',array('type'=>'password'));
		echo $this->Form->input('reclave',array('type'=>'password', 'required'=>'required'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Crear')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
