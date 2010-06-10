<div class="pages form">
<?php echo $this->Form->create('Page');?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Page', true)); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('action' => 'index'));?></li>
	</ul>
</div>