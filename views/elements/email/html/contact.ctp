<h3>Stinson L-5 Stuff Email</h3>
<p><b>Name:</b> <?php echo $data['Message']['name']?></p>
<p><b>Email:</b> <?php echo $data['Message']['email']?></p>
<p><b>Phone:</b> <?php echo $data['Message']['phone']?></p>
<p><b>Subject:</b> <?php echo $data['Message']['subject']?></p>
<p><b>Message:</b></p> 
<?php
$message = explode("\n", $data['Message']['message']);

foreach ($message as $line):
	echo '<p> ' . $line . '</p>';
endforeach;
?>
<p><b>Items of Interest:</b></p> 
<ul>
<?php foreach ($data['Item']['Item'] as $itemId):?>
	<li><a href="<?php echo $this->Html->url(array('controller' => 'items', 'action' => 'view', $itemId, Inflector::slug($items[$itemId])), true)?>"><?php echo $items[$itemId]?></a></li>
<?php endforeach;?>
</ul>