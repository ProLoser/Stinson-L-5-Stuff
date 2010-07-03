<?php $this->set('title_for_layout', __('Notes', true));?>
<ul>
<?php foreach ($notes as $note):?>
	<li><?php echo $note['Note']['note']?></li>
<?php endforeach;?>
</ul>