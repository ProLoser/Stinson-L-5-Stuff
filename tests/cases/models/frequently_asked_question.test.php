<?php
/* FrequentlyAskedQuestion Test cases generated on: 2010-05-29 15:05:27 : 1275171087*/
App::import('Model', 'FrequentlyAskedQuestion');

class FrequentlyAskedQuestionTestCase extends CakeTestCase {
	var $fixtures = array('app.frequently_asked_question');

	function startTest() {
		$this->FrequentlyAskedQuestion =& ClassRegistry::init('FrequentlyAskedQuestion');
	}

	function endTest() {
		unset($this->FrequentlyAskedQuestion);
		ClassRegistry::flush();
	}

}
?>