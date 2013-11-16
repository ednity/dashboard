<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.answer',
		'app.question',
		'app.comment',
		'app.post',
		'app.forum_answer',
		'app.forum_comment',
		'app.forum_question',
		'app.pollchoice',
		'app.poll',
		'app.quiz_attempt',
		'app.quiz',
		'app.group',
		'app.groups_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
