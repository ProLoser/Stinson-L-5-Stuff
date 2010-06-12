<?php
/* Email Test cases generated on: 2010-05-29 15:05:04 : 1275172684*/
App::import('Model', 'Email');

class EmailTestCase extends CakeTestCase {
	var $fixtures = array('app.email', 'app.item', 'app.category', 'app.emails_item');

	function startTest() {
		$this->Email =& ClassRegistry::init('Email');
	}

	function endTest() {
		unset($this->Email);
		ClassRegistry::flush();
	}

}
?>