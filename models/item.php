<?php
class Item extends AppModel {
	var $name = 'Item';
	var $order = 'Item.order_weight ASC';
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter an item name',
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

	var $hasAndBelongsToMany = array(
		'Email',
		'Category',
		'Note'
	);
	
	var $actsAs = array(
	      'UploadPack.Upload' => array(
	        'picture' => array(
	          'styles' => array(
	            'thumb' => '80x80'
	          )
	        )
	      ),
	    );

}
?>