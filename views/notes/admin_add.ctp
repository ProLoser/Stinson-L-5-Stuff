<div class="notes form">
<?php echo $this->Form->create('Note');?>
	<fieldset>
 		<legend><?php echo $this->title_for_layout = sprintf(__('Add %s', true), __('Note', true)); ?></legend>
	<?php
		echo $this->Form->input('note');
		echo $this->Form->input('number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>