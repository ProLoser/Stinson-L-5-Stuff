<div class="items view">
	<?php echo $this->Items->inquire($item['Item']['id'])?>
	<div style="border:2px solid #000;float:right;margin: 10px;"><?php echo $this->Items->image($item); ?></div>
	<h2><?php echo $item['Item']['name']; ?></h2>
	<dl><?php $i = 0; $class = '';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo (!$item['Item']['price']) ? $item['Item']['price'] : 'To be Negotiated'; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($item['Category']['name'], array('controller' => 'categories', 'action' => 'view', $item['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $item['Item']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>