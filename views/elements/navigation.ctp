<ul id="topMenu">
	<li><?php echo $this->Html->link('Search', array('controller' => 'pages', 'action' => 'index', 'search'));?></li>
	<li><?php echo $this->Html->link('About Me', array('controller' => 'pages', 'action' => 'index', 'about_me'));?></li>
	<li><?php echo $this->Html->link('Contact Me', array('controller' => 'messages', 'action' => 'index'));?></li>
</ul>