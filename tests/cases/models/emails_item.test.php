<?php
/* EmailsItem Test cases generated on: 2010-05-29 15:05:04 : 1275172684*/
App::import('Model', 'EmailsItem');

class EmailsItemTestCase extends CakeTestCase {
	var $fixtures = array('app.emails_item', 'app.email', 'app.item', 'app.category');

	function startTest() {
		$this->EmailsItem =& ClassRegistry::init('EmailsItem');
	}

	function endTest() {
		unset($this->EmailsItem);
		ClassRegistry::flush();
	}

}
?>