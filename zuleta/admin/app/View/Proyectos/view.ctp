<div class="proyectos view">
<h2><?php echo __('Proyecto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Título'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Temática'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['tematica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoría'); ?></dt>
		<dd>
			<?php echo h($proyecto['Categorium']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php switch(h($proyecto['Proyecto']['tipo'])){
			case '0': echo "Pasantía"; break;
			case '1': echo "Tesis"; break;
			} ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autor'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['autor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tutor'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['tutor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jurado'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['jurado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['ubicacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resumen'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['resumen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cota'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['cota']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ruta'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['ruta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha de Presentación'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['fechaPresentacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Proyecto'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Borrar Proyecto'), array('action' => 'delete', $proyecto['Proyecto']['id']), null, __('¿Usted esta seguro de borrar el proyecto %s?', $proyecto['Proyecto']['titulo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Proyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proyecto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
