<?php
App::uses('ForumQuestion', 'Model');

/**
 * ForumQuestion Test Case
 *
 */
class ForumQuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.forum_question',
		'app.user',
		'app.answer',
		'app.question',
		'app.comment',
		'app.post',
		'app.group',
		'app.groups_user',
		'app.forum_answer',
		'app.forum_comment',
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
		$this->ForumQuestion = ClassRegistry::init('ForumQuestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ForumQuestion);

		parent::tearDown();
	}

}
