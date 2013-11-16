<?php
App::uses('AppController', 'Controller');
/**
 * Reports Controller
 *
 */
class ReportsController extends AppController {

	public $uses = array('User', 'Group');

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
	}

}

