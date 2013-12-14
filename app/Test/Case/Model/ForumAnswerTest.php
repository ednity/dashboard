<?php
App::uses('ForumAnswer', 'Model');

/**
 * ForumAnswer Test Case
 *
 */
class ForumAnswerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.forum_answer',
		'app.user',
		'app.answer',
		'app.question',
		'app.comment',
		'app.post',
		'app.group',
		'app.groups_user',
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
		$this->ForumAnswer = ClassRegistry::init('ForumAnswer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ForumAnswer);

		parent::tearDown();
	}

}
