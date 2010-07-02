<?php $this->set('title_for_layout', $category['Category']['name']);?>
<p><?php echo $category['Category']['description']; ?></p>
<?php echo $this->Items->listing($category['Item']);?>