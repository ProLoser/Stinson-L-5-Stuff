<div class="users login">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Login')?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Login', true));?>
</div>