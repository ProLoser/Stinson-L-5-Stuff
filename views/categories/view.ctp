<div class="categories view">
	<h2><?php echo $category['Category']['name']; ?></h2>
	<p><?php echo $category['Category']['description']; ?></p>
	<?php echo $this->Items->listing($category['Item']);?>
</div>