<?php $this->set('title_for_layout', 'Contact Me')?>
<?php echo $this->Form->create('Message', array('url' => '/email', 'id' => 'contact'));?>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('subject');
		echo $this->Form->input('message');
		echo $this->Form->input('Item', array('label' => 'Items of interest'));
		echo $this->Form->submit(null, array('class' => 'submit'));
	?>
<?php echo $this->Form->end();?>