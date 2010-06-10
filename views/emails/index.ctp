<div class="emails form">
<?php echo $this->Form->create('Email');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Email', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('subject');
		echo $this->Form->input('message');
		echo $this->Form->input('Item', array('selected' => $id));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>