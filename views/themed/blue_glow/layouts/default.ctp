<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Stinson L-5 Stuff:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	 <!--[if gte IE 7]>
		<?php echo $this->Html->css('ie7'); ?>
    <![endif]-->
	<!--[if lte IE 6]>
		<?php echo $this->Html->script('supersleight-min'); ?>
	 <![endif]-->
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array(
			'style',
			'/js/fancybox/jquery.fancybox-1.3.1',
		));
		
		echo $this->Html->script(array(
			'jquery.min',
			'fancybox/jquery.easing-1.3.pack',
			'fancybox/jquery.mousewheel-3.0.2.pack',
			'fancybox/jquery.fancybox-1.3.1.pack',
			'plugins',
		));

		echo $scripts_for_layout;
	?>
</head>
<body>	
	<div id="wrapper">
		<div id="header">
			<div id="logo"><h1><?php echo $this->Html->link(__('Stinson L-5 Stuff', true), '/'); ?></h1></div>
			<?php echo $this->element('navigation');?>
		</div>
		<div id="content" class="clearfix columns">
			<div id="colLeft">
				<h1><?php echo $title_for_layout; ?></h1>
				<?php echo $this->Session->flash(); ?>
				<?php echo $content_for_layout; ?>
			</div>
			<div id="colRight">
				<?php echo $this->element('sidebar')?>
			</div>
		</div>
	</div>
	<div id="footer">
		<p style="float: left">© 20010 StinsonL-5Stuff.com and Blosser Diversified. All Right Reserved.</p> 
		<p style="float: right">Website created by <?php echo $this->Html->link('Dean Sofer', 'http://deansofer.com');?> using 
		<?php echo $this->Html->link(
			$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
			'http://www.cakephp.org/',
			array('target' => '_blank', 'escape' => false)
		); ?></p>
	</div>

</body>
</html>