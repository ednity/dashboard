<?php
App::uses('GroupsUser', 'Model');

/**
 * GroupsUser Test Case
 *
 */
class GroupsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.groups_user',
		'app.user',
		'app.answer',
		'app.question',
		'app.comment',
		'app.post',
		'app.group',
		'app.forum_answer',
		'app.forum_comment',
		'app.forum_question',
		'app.quiz',
		'app.groups_quiz',
		'app.poll',
		'app.postfile',
		'app.pollchoice',
		'app.quiz_attempt'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroupsUser = ClassRegistry::init('GroupsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroupsUser);

		parent::tearDown();
	}

}
