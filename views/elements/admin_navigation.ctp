<div class="actions">
	<h3><?php __('Navigation'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link('Items', array('controller' => 'items', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link('Information Pages', array('controller' => 'pages', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link('Emails', array('controller' => 'emails', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link('Administrators', array('controller' => 'users', 'action' => 'index'));?></li>
	</ul>
</div>