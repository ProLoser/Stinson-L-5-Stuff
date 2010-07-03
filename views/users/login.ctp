<?php 
	$this->set('title_for_layout', 'Login');
	echo $this->Form->create('User');
	echo $this->Form->input('email');
	echo $this->Form->input('password');
	echo $this->Form->end(__('Login', true));
?>