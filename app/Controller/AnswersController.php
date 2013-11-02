<?php
App::uses('AppController', 'Controller');
/**
 * Answers Controller
 *
 * @property Answer $Answer
 * @property PaginatorComponent $Paginator
 */
class AnswersController extends AppController {

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
		$this->Answer->recursive = 0;
		$this->set('answers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Answer->id = $id;
		if (!$this->Answer->exists()) {
			throw new NotFoundException(__('Invalid %s', __('answer')));
		}
		$this->set('answer', $this->Answer->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Answer->create();
			if ($this->Answer->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('answer')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('answer')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$users = $this->Answer->User->find('list');
		$questions = $this->Answer->Question->find('list');
		$this->set(compact('users', 'questions'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Answer->id = $id;
		if (!$this->Answer->exists()) {
			throw new NotFoundException(__('Invalid %s', __('answer')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Answer->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('answer')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('answer')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Answer->read(null, $id);
		}
		$users = $this->Answer->User->find('list');
		$questions = $this->Answer->Question->find('list');
		$this->set(compact('users', 'questions'));
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
		$this->Answer->id = $id;
		if (!$this->Answer->exists()) {
			throw new NotFoundException(__('Invalid %s', __('answer')));
		}
		if ($this->Answer->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('answer')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('answer')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
