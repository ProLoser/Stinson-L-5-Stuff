<?php
/* Item Test cases generated on: 2010-05-29 15:05:05 : 1275172685*/
App::import('Model', 'Item');

class ItemTestCase extends CakeTestCase {
	var $fixtures = array('app.item', 'app.category', 'app.email', 'app.emails_item');

	function startTest() {
		$this->Item =& ClassRegistry::init('Item');
	}

	function endTest() {
		unset($this->Item);
		ClassRegistry::flush();
	}

}
?>