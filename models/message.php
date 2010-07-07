<?php
class Message extends AppModel {
	var $name = 'Message';
	var $order = 'Message.created ASC';
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your name',
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Please enter a valid email address',
			),
		),
		'phone' => array(
			'notempty' => array(
				'rule' => array('phone', 'US'),
				'message' => 'Please enter a valid phone number',
				'allowEmpty' => true,
			),
		),
		'message' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a message',
			),
		),
	);

	var $hasAndBelongsToMany = array(
		'Item'
	);

}
?>