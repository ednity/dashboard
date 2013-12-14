<?php
App::uses('AppController', 'Controller');
/**
 * Reports Controller
 *
 */
class ReportsController extends AppController {

	public $recursive = -1;

	public $uses = array('User', 'Post', 'Group');

/**
 *  Layout
 *
 * @var string
 */
	public $layout = 'bootstrap';

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('TwitterBootstrap.BootstrapHtml', 'TwitterBootstrap.BootstrapForm', 'TwitterBootstrap.BootstrapPaginator');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function all(){
		$this->set('users_num', $this->User->getUsersNum());
		$this->set('groups_num', $this->Group->getGroupsNum());
		$this->set('posts_num', $this->Post->getPostsNum());
		$this->set('groups', $this->Group->findGroups());
	}

}

