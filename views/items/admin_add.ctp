<div class="items form">
<?php echo $this->Form->create('Item', array('type' => 'file'));?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Item', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('picture', array('type' => 'file'));
		echo $this->Form->input('price', array('default' => '0.00'));
		echo $this->Form->input('make');
		echo $this->Form->input('model_number');
		echo $this->Form->input('category_id');
		echo $this->Form->input('order_weight', array('default' => 0));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Items', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Categories', true)), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Category', true)), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Emails', true)), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Email', true)), array('controller' => 'emails', 'action' => 'add')); ?> </li>
	</ul>
</div>