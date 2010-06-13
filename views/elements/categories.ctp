<div class="actions">
	<h3>Categories</h3>
	<ul>
		<?php foreach ($navCategories as $id => $category):?>
		<li><?php echo $this->Html->link($category, array('controller' => 'categories', 'action' => 'view', $id, Inflector::slug($category)))?></li>
		<?php endforeach;?>
	</ul>
</div>