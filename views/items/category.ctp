<?php $this->set('title_for_layout', 'Category: ' . $category['Category']['name']);?>
<div class="items index">
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('name');?></th>
		<th><?php echo $this->Paginator->sort('make');?></th>
		<th><?php echo $this->Paginator->sort('model_number');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($items as $item):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $item['Item']['name']; ?>&nbsp;</td>
		<td><?php echo $item['Item']['make']; ?>&nbsp;</td>
		<td><?php echo $item['Item']['model_number']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('View', array('controller' => 'items', 'action' => 'view', $item['Item']['id'])); ?>
			<?php echo $this->Html->link(__('Inquire', true), array('controller' => 'messages', 'action' => 'index', $item['Item']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
	<h2>Notes</h2>
	<ul>
	<?php foreach($notes as $note):?>
		<li><strong><?php echo $note['Note']['number'];?>:</strong> <?php echo $note['Note']['note']?></li>
	<?php endforeach;?>
	</ul>
</div>