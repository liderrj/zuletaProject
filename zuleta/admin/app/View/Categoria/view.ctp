<div class="categoria view">
<h2><?php echo __('Categorium'); ?></h2>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categorium'), array('action' => 'edit', $categorium['Categorium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categorium'), array('action' => 'delete', $categorium['Categorium']['id']), null, __('Are you sure you want to delete # %s?', $categorium['Categorium']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorium'), array('action' => 'add')); ?> </li>
	</ul>
</div>
