<?php if($this->Session->check('login')): ?>
<h3>Bienvenidos al Sistema de Administración de Búsqueda de Tesis y Pasantías de Ingeniería Metalúrgica</h3>

<p>
	Este sistema administrativo se creo con el fin de incluir los informes de tesis y pasantia de forma simple al buscador del sistema.
</p>
<?php else: ?>

	<div class="usuarios form">
<?php echo $this->Form->create('Usuario', array('action' => 'login')); ?>
	<fieldset>
		<legend><?php echo __('Iniciar Sesión'); ?></legend>
	<?php
		echo $this->Form->input('login',array('label'=>'Usuario'));
		echo $this->Form->input('clave',array('type'=>'password'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Conectar')); ?>
</div>

<?php endif; ?>