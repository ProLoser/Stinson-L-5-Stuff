<div class="actions">
	<h3><?php __('Navigation'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link('Items', array('controller' => 'items', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link('Notes', array('controller' => 'notes', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link('Information Pages', array('controller' => 'pages', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link('Emails', array('controller' => 'messages', 'action' => 'index'));?></li>
		<li><?php echo $this->Html->link('Administrators', array('controller' => 'users', 'action' => 'index'));?></li>
	</ul>
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('New Item', array('controller' => 'items', 'action' => 'add'));?></li>
		<li><?php echo $this->Html->link('New Category', array('controller' => 'categories', 'action' => 'add'));?></li>
		<li><?php echo $this->Html->link('New Note', array('controller' => 'notes', 'action' => 'add'));?></li>
		<li><?php echo $this->Html->link('New Information Page', array('controller' => 'pages', 'action' => 'add'));?></li>
		<li><?php echo $this->Html->link('New Admin User', array('controller' => 'users', 'action' => 'add'));?></li>
	</ul>
</div>