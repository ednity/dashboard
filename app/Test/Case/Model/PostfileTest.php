<?php
App::uses('Postfile', 'Model');

/**
 * Postfile Test Case
 *
 */
class PostfileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.postfile',
		'app.post',
		'app.user',
		'app.answer',
		'app.question',
		'app.comment',
		'app.forum_answer',
		'app.forum_comment',
		'app.forum_question',
		'app.pollchoice',
		'app.poll',
		'app.quiz_attempt',
		'app.quiz',
		'app.group',
		'app.groups_user',
		'app.groups_quiz'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Postfile = ClassRegistry::init('Postfile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Postfile);

		parent::tearDown();
	}

}
