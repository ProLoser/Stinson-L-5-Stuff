<div class="items view">
	<?php echo $this->Items->inquire($item['Item']['id'])?>
	<h2><?php echo $item['Item']['name']; ?></h2>
	<h3><?php echo $this->Html->link($item['Category']['name'], array('controller' => 'categories', 'action' => 'view', $item['Category']['id'])); ?></h3>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $item['Item']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Picture File Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->image($item['Item']['picture_file_name']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo (!$item['Item']['price']) ? $item['Item']['price'] : 'To be Negotiated'; ?>
			&nbsp;
		</dd>
	</dl>
</div>