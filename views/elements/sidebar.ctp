<h2>Categories</h2>
<ul id="subCategs">
	<?php foreach ($navCategories as $id => $category):?>
	<li><?php echo $this->Html->link($category, array('controller' => 'items', 'action' => 'category', $id, Inflector::slug($category)))?></li>
	<?php endforeach;?>
</ul>
<p>This website is dedicated to the preservation of the Stinson L-5 Sentinal WWII aircraft and Lycoming O-435 engine that was used in the L-5. Over the last 20 years I have collected a number of Stinson L-5 parts, propellers, tools and Lycoming O-435 engines and accessories and would like to find them a good home. Dick Blosser.</p>
<?php echo $this->Html->image('small_plane_photo.jpg', array('class' => 'photo'))?>