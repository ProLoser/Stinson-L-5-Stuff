<?php
/* FrequentlyAskedQuestion Fixture generated on: 2010-05-29 15:05:27 : 1275171087 */
class FrequentlyAskedQuestionFixture extends CakeTestFixture {
	var $name = 'FrequentlyAskedQuestion';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'question' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200),
		'answer' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'order_weight' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'question' => 'Lorem ipsum dolor sit amet',
			'answer' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'order_weight' => 1
		),
	);
}
?>