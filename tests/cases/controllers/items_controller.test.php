<?php
/* Items Test cases generated on: 2010-05-29 15:05:23 : 1275172703*/
App::import('Controller', 'Items');

class TestItemsController extends ItemsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ItemsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.item', 'app.category', 'app.email', 'app.emails_item');

	function startTest() {
		$this->Items =& new TestItemsController();
		$this->Items->constructClasses();
	}

	function endTest() {
		unset($this->Items);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>