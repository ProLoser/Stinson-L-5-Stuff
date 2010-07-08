<?php $this->layout = 'ajax';?>
<style type="text/css">
table {
	border-right: 1px dotted #ccc;
}
th {
	font-weight: bold;
	text-align: left;
	border-left: 1px dotted #ccc;
	border-bottom: 6px double #ccc;
}
td {
	border-left: 1px dotted #ccc;
}
tr.top td {
	border-bottom: 1px dashed #ccc;
}
tr.bottom td {
	border-bottom: 1px solid #000;
}
tr.altrow td {
	background: #fafafa;
}
li {
	margin: 10px 0;
}
</style>
<h1>Stinson L-5 Stuff.com</h1>
<h2>Items</h2>
<table cellpadding="3px" cellspacing="0" width="100%">
	<tr>
		<th>Name</th>
		<th>Make</th>
		<th>Model&nbsp;#</th>
		<th>Price</th>
		<th>Notes</th>
		<th>Cat</th>
		<th>Msgs</th>
	</tr>
	<?php
	$i = 0;
	foreach ($items as $item):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' altrow';
		}
	?>
	<tr class="top<?php echo $class?>">
		<td><strong><?php echo $item['Item']['name']?></strong>&nbsp;</td>
		<td><?php echo $item['Item']['make']?>&nbsp;</td>
		<td><?php echo $item['Item']['model_number']?>&nbsp;</td>
		<td><?php if ($item['Item']['price'] != 0.00) echo $item['Item']['price'];?>&nbsp;</td>
		<td><?php echo implode(', ', Set::extract('{n}/number', $item['Note']));?>&nbsp;</td>
		<td><?php echo implode(', ', Set::extract('{n}/id', $item['Category']));?>&nbsp;</td>
		<td><?php echo count($item['Message'])?>&nbsp;</td>
	</tr>
	<tr class="bottom<?php echo $class?>">
		<td colspan="7"><?php echo $item['Item']['description']?></td>
	</tr>
	<?php endforeach;?>
</table>
<h2>Notes</h2>
<ul>
<?php foreach($notes as $note):?>
	<li><b>(<?php echo $note['Note']['number']?>)</b> <?php echo $note['Note']['note']?></li>
<?php endforeach;?>
</ul>

<h2>Categories</h2>
<ul>
<?php foreach($categories as $category):?>
	<li><b>(<?php echo $category['Category']['id']?>)</b> <?php echo $category['Category']['name']?></li>
<?php endforeach;?>
</ul>