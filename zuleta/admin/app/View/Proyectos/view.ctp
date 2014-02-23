<div class="proyectos view">
<h2><?php echo __('Proyecto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tematica'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['tematica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Categoria'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['id_categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['tipo']); ?>
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
		<dt><?php echo __('FechaPresentacion'); ?></dt>
		<dd>
			<?php echo h($proyecto['Proyecto']['fechaPresentacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proyecto'), array('action' => 'edit', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proyecto'), array('action' => 'delete', $proyecto['Proyecto']['id']), null, __('Are you sure you want to delete # %s?', $proyecto['Proyecto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
