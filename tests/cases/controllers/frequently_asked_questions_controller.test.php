<?php
/* FrequentlyAskedQuestions Test cases generated on: 2010-05-29 15:05:30 : 1275171150*/
App::import('Controller', 'FrequentlyAskedQuestions');

class TestFrequentlyAskedQuestionsController extends FrequentlyAskedQuestionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FrequentlyAskedQuestionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.frequently_asked_question');

	function startTest() {
		$this->FrequentlyAskedQuestions =& new TestFrequentlyAskedQuestionsController();
		$this->FrequentlyAskedQuestions->constructClasses();
	}

	function endTest() {
		unset($this->FrequentlyAskedQuestions);
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