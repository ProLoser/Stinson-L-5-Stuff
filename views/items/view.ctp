<?php 
$title = $item['Item']['name'];
if (!empty($item['Item']['make']))
	$title .= ': ' . $item['Item']['make'];
if (!empty($item['Item']['model_number']))
	$title .= ' - ' . $item['Item']['model_number'];
$this->set('title_for_layout', $title); ?>
<div class="viewItem">
	<?php if (!empty($item['Item']['picture_file_name'])) echo $this->Items->image($item); ?>
	<?php echo $this->Items->inquire($item['Item']['id'])?>
</div>

<h2>Price: <?php echo ($item['Item']['price'] != '0.00') ? '$' . $item['Item']['price'] : 'To be Negotiated'?></h2>
<?php echo $item['Item']['description']; ?>
<h3>Details</h3>
<ul>	
<?php if (!empty($item['Item']['make'])):?>
	<li><b>Make:</b> <?php echo $item['Item']['make']; ?></li>
<?php endif;?>
<?php if (!empty($item['Item']['model_number'])):?>
	<li><b>Model Number:</b> <?php echo $item['Item']['model_number']; ?></li>
<?php endif;?>
	<li><b>Categories:</b> 
		<ul><?php foreach($item['Category'] as $category):?>
			<li><?php echo $this->Html->link($category['name'], array('controller' => 'categories', 'action' => 'view', $category['id'])); ?></li>
		<?php endforeach;?></ul>
	</li>
	<li><b>Notes:</b> 
		<ul><?php foreach($item['Note'] as $note):?>
			<li><?php echo $note['name']; ?></li>
		<?php endforeach;?></ul>
	</li>
</ul>