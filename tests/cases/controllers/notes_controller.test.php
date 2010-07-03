<?php
/* Notes Test cases generated on: 2010-07-03 14:07:28 : 1278193168*/
App::import('Controller', 'Notes');

class TestNotesController extends NotesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NotesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.note', 'app.item', 'app.email', 'app.emails_item', 'app.category', 'app.categories_item', 'app.items_note');

	function startTest() {
		$this->Notes =& new TestNotesController();
		$this->Notes->constructClasses();
	}

	function endTest() {
		unset($this->Notes);
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

}
?>