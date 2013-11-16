<?php
App::uses('Post', 'Model');

/**
 * Post Test Case
 *
 */
class PostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.postfile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Post = ClassRegistry::init('Post');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Post);

		parent::tearDown();
	}

}
