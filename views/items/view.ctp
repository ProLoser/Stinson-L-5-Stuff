<?php $this->set('title_for_layout', $item['Item']['name']); ?>
<div class="viewItem">
	<?php echo $this->Items->image($item); ?>
	<?php echo $this->Items->inquire($item['Item']['id'])?>
</div>
<h2><?php echo ($item['Item']['price']) ? '$' . $item['Item']['price'] : 'To be Negotiated'?></h2>
<?php echo $item['Item']['description']; ?>
<h3>Details</h3>
<ul>
	<li><b>Category:</b> <?php echo $this->Html->link($item['Category']['name'], array('controller' => 'categories', 'action' => 'view', $item['Category']['id'])); ?></li>
<?php if (!empty($item['Item']['make'])):?>
	<li><b>Make:</b> <?php echo $item['Item']['make']; ?></li>
<?php endif;?>
<?php if (!empty($item['Item']['model_number'])):?>
	<li><b>Model Number:</b> <?php echo $item['Item']['model_number']; ?></li>
<?php endif;?>
</ul>