<?php
App::uses('AppController', 'Controller');
/**
 * Postfiles Controller
 *
 * @property Postfile $Postfile
 * @property PaginatorComponent $Paginator
 */
class PostfilesController extends AppController {

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
		$this->Postfile->recursive = 0;
		$this->set('postfiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Postfile->id = $id;
		if (!$this->Postfile->exists()) {
			throw new NotFoundException(__('Invalid %s', __('postfile')));
		}
		$this->set('postfile', $this->Postfile->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Postfile->create();
			if ($this->Postfile->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('postfile')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('postfile')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$posts = $this->Postfile->Post->find('list');
		$this->set(compact('posts'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Postfile->id = $id;
		if (!$this->Postfile->exists()) {
			throw new NotFoundException(__('Invalid %s', __('postfile')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Postfile->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('postfile')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('postfile')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Postfile->read(null, $id);
		}
		$posts = $this->Postfile->Post->find('list');
		$this->set(compact('posts'));
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
		$this->Postfile->id = $id;
		if (!$this->Postfile->exists()) {
			throw new NotFoundException(__('Invalid %s', __('postfile')));
		}
		if ($this->Postfile->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('postfile')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('postfile')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}

}
