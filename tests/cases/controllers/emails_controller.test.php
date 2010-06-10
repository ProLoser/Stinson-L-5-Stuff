<?php
/* Emails Test cases generated on: 2010-05-29 15:05:31 : 1275173551*/
App::import('Controller', 'Emails');

class TestEmailsController extends EmailsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EmailsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.email', 'app.item', 'app.category', 'app.emails_item');

	function startTest() {
		$this->Emails =& new TestEmailsController();
		$this->Emails->constructClasses();
	}

	function endTest() {
		unset($this->Emails);
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