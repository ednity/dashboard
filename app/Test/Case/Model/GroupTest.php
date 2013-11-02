<?php
App::uses('Group', 'Model');

/**
 * Group Test Case
 *
 */
class GroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group',
		'app.admin',
		'app.forum_answer',
		'app.forum_comment',
		'app.forum_question',
		'app.post',
		'app.user',
		'app.answer',
		'app.question',
		'app.comment',
		'app.pollchoice',
		'app.poll',
		'app.quiz_attempt',
		'app.quiz',
		'app.groups_user',
		'app.postfile',
		'app.groups_quiz'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Group = ClassRegistry::init('Group');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Group);

		parent::tearDown();
	}

}
