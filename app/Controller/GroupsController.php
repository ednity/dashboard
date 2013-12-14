<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 * @property PaginatorComponent $Paginator
 */
class GroupsController extends AppController {

	public $uses = array('Group', 'GroupsUser', 'Post', 'ForumQuestion', 'ForumAnswer');

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
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid %s', __('group')));
		}
		$this->set('group', $this->Group->read(null, $id));
		$this->set('posts_num', $this->Post->getPostsNumByGroupId($id));
		$this->set('questions_num', $this->ForumQuestion->getQuestionsNumByGroupId($id));
		$this->set('answers_num', $this->ForumAnswer->getAnswersNumByGroupId($id));
		$this->set('users_num', $this->GroupsUser->find('count', array(
			'conditions' => array(
				'GroupsUser.group_id' => $id
			)
		)));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('group')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('group')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$admins = $this->Group->Admin->find('list');
		$quizzes = $this->Group->Quiz->find('list');
		$users = $this->Group->User->find('list');
		$this->set(compact('admins', 'quizzes', 'users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid %s', __('group')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('group')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('group')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Group->read(null, $id);
		}
		$admins = $this->Group->Admin->find('list');
		$quizzes = $this->Group->Quiz->find('list');
		$users = $this->Group->User->find('list');
		$this->set(compact('admins', 'quizzes', 'users'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid %s', __('group')));
		}
		if ($this->Group->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('group')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('group')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
