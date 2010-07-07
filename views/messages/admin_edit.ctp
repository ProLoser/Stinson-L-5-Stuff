<div class="emails form">
<?php echo $this->Form->create('Email');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Email', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('subject');
		echo $this->Form->input('message');
		echo $this->Form->input('Item');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Extra Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete this Email', true), array('action' => 'delete', $this->Form->value('Email.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Email.id'))); ?></li>
	</ul>
</div>