Stinson L-5 Stuff Email

Name:    <?php echo $content['Email']['name']?>
Email:   <?php echo $content['Email']['email']?>
Phone:   <?php echo $content['Email']['phone']?>
Subject: <?php echo $content['Email']['subject']?>
Message:
<?php echo $content['Email']['message'];?>


Items of Interest:
<?php foreach ($content['Item']['Item'] as $itemId):?>
	- <?php echo $items[$itemId]?>: <?php echo $this->Html->url(array('controller' => 'items', 'action' => 'view', $itemId, Inflector::slug($items[$itemId])), true)?>
<?php endforeach;?>