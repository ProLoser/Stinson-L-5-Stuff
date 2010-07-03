<?php
/* Note Test cases generated on: 2010-07-03 14:07:27 : 1278193167*/
App::import('Model', 'Note');

class NoteTestCase extends CakeTestCase {
	var $fixtures = array('app.note', 'app.item', 'app.email', 'app.emails_item', 'app.category', 'app.categories_item', 'app.items_note');

	function startTest() {
		$this->Note =& ClassRegistry::init('Note');
	}

	function endTest() {
		unset($this->Note);
		ClassRegistry::flush();
	}

}
?>