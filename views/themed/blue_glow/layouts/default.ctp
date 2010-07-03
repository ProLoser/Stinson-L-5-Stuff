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
			'jquery.lightbox-0.5'
		));
		
		echo $this->Html->script(array(
			'jquery.min',
			'stepcarousel',
			'jquery.lightbox-0.5.min',
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
		© 2009 BlueGlow.com. All Right Reserved.
		<?php echo $this->Html->image('footer_mark.gif', array('class' => 'footerMark'));
		echo $this->Html->link(
			$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
			'http://www.cakephp.org/',
			array('target' => '_blank', 'escape' => false)
		); ?>
	</div>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>