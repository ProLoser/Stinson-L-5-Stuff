<?php
class Page extends AppModel {
	var $name = 'Page';
	var $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a valid page title',
			),
		),
		'content' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter page content',
			),
		),
	);
}
?>