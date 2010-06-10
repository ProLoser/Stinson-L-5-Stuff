<?php
/* Item Fixture generated on: 2010-05-29 15:05:05 : 1275172685 */
class ItemFixture extends CakeTestFixture {
	var $name = 'Item';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'picture_file_name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'price' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '8,2'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'picture_file_name' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'category_id' => 1
		),
	);
}
?>