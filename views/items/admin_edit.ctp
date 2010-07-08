<div class="items form">
<?php echo $this->Form->create('Item', array('type' => 'file'));?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Item', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Note', array('multiple' => 'checkbox'));
		echo $this->Form->input('description');
		echo $this->Form->input('picture', array('type' => 'file'));
		echo $this->Form->input('price', array('label' => 'Price: Leave 0.00 for TBD. Do not include the $ sign', 'default' => '0.00'));
		echo $this->Form->input('make');
		echo $this->Form->input('model_number');
		echo $this->Form->input('Category', array('multiple' => 'checkbox'));
		echo $this->Form->input('order_weight', array('label' => 'Order Weight (Lower numbers are in front, example: -100 or 100)', 'default' => 0));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Extra Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete This Item', true), array('action' => 'delete', $this->Form->value('Item.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Item.id'))); ?></li>
	</ul>
</div>