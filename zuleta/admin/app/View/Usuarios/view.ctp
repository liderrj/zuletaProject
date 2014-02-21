<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			&nbsp;
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			&nbsp;
			<?php echo h($usuario['Usuario']['login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Completo'); ?></dt>
		<dd>
			&nbsp;
			<?php echo h($usuario['Usuario']['nombreCompleto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo de Usuario'); ?></dt>
		<dd>
			&nbsp;
			<?php echo h($usuario['Usuario']['tipoUsuario']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Borrar Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Esta seguro de borrar el elemento # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?> </li>
	</ul>
</div>
