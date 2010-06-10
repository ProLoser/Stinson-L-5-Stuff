<div class="categories index">
	<h2><?php __('Categories');?></h2>
	<?php
	$i = 0;
	foreach ($categories as $category):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<h4<?php echo $class;?>><?php echo $this->Html->link($category['Category']['name'], array('action' => 'view', $category['Category']['id'], Inflector::slug($category['Category']['name']))); ?></h4>
	<p><?php echo $category['Category']['description']; ?>&nbsp;</p>
<?php endforeach; ?>
</div>