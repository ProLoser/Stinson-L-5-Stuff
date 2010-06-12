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
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Email' => array(
			'className' => 'Email',
			'joinTable' => 'emails_items',
			'foreignKey' => 'item_id',
			'associationForeignKey' => 'email_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
	
	var $actsAs = array(
	      'UploadPack.Upload' => array(
	        'picture' => array(
	          'styles' => array(
	            'thumb' => '80x80'
	          )
	        )
	      )
	    );

}
?>