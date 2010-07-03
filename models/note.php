<?php
class Note extends AppModel {
	var $name = 'Note';
	var $displayField = 'name';
	var $virtualFields = array(
		'name' => 'CONCAT("(", Note.number, ") " , Note.note)'
	);
	var $order = 'Note.number ASC';
	var $validate = array(
		'number' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Please enter a number to use for the note',				
			),
		),
		'note' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please do not leave the note blank'
			)
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Item',
	);

}
?>