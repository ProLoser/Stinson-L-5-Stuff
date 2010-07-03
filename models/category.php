<?php
class Category extends AppModel {
	var $name = 'Category';
	var $order = 'Category.order_weight ASC';
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a valid category name',
			),
		),
		'order_weight' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Order weight must be a positive or negative integer',
				'allowEmpty' => true,
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Item',
	);

}
?>