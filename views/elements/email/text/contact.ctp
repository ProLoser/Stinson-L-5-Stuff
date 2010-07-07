Stinson L-5 Stuff Email

Name:    <?php echo $data['Message']['name']?> 
Email:   <?php echo $data['Message']['email']?> 
Phone:   <?php echo $data['Message']['phone']?> 
Subject: <?php echo $data['Message']['subject']?> 
Message:
<?php echo $data['Message']['message'];?> 


Items of Interest:
<?php foreach ($data['Item']['Item'] as $itemId):?>
	- <?php echo $items[$itemId]?>: <?php echo $this->Html->url(array('controller' => 'items', 'action' => 'view', $itemId, Inflector::slug($items[$itemId])), true)?> 
<?php endforeach;?>