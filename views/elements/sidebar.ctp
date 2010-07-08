<h2>Categories</h2>
<ul id="subCategs">
	<?php foreach ($navCategories as $id => $category):?>
	<li><?php echo $this->Html->link($category, array('controller' => 'categories', 'action' => 'view', $id, Inflector::slug($category)))?></li>
	<?php endforeach;?>
</ul>
<?php echo $this->Html->image('small_plane_photo.jpg', array('class' => 'photo'))?>
<!-- get in touch 
<h2 class="home">Get in touch</h2>
<p>I would be happy to hear from you. For contacting me please use the <?php echo $this->Html->link('contact page', array('controller' => 'emails', 'action' => 'index'))?> or the info bellow.</p>
<p><strong>Phone:</strong> +123456789<br />
<strong>Mobile:</strong> +123456789<br />
</p>
<p><strong>Email:</strong> <a href="mailto:#">office[at]blueglow[dot]com</a></p>
-->
<h2>Contact Me</h2>
<p>Sorry for the inconvenience, the <?php echo $this->Html->link('contact form', array('controller' => 'messages', 'action' => 'index'))?> now works!</p>