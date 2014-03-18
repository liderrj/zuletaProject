<?php
App::uses('AppController', 'Controller');
/**
 * Proyectos Controller
 *
 * @property Proyecto $Proyecto
 * @property PaginatorComponent $Paginator
 */
class ProyectosController extends AppController {

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
		$this->Proyecto->recursive = 0;
		$this->set('proyectos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Proyecto Inválido'));
		}
		$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
		$this->set('proyecto', $this->Proyecto->find('first', $options));

		//$this->set('categorias', $this->Proyecto->Categorium->find('list',array('fields'=>array('id','nombre'))));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('categorias', $this->Proyecto->Categorium->find('list',array('fields'=>array('id','nombre'))));
		if ($this->request->is('post')) {
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('EL proyecto ha sido guardado'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El proyecto no puedo ser guardado, intente nuevamente.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('categorias', $this->Proyecto->Categorium->find('list',array('fields'=>array('id','nombre'))));
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Invalid proyecto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('EL proyecto ha sido guardado'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El proyecto no puedo ser guardado, intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
			$this->request->data = $this->Proyecto->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Proyecto Inválido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Proyecto->delete()) {
			$this->Session->setFlash(__('El proyecto ha sido borrado.'));
		} else {
			$this->Session->setFlash(__('El proyecto no pudo se borrado, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Proyecto->recursive = 0;
		$this->set('proyectos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Proyecto inválido'));
		}
		$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
		$this->set('proyecto', $this->Proyecto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Proyecto->create();
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('El proyecto ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El proyecto no pudo ser guardado, intente nuevamente.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Proyecto->exists($id)) {
			throw new NotFoundException(__('Proyecto Inválido.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proyecto->save($this->request->data)) {
				$this->Session->setFlash(__('El proyecto ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El proyecto no pudo ser guardado, intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Proyecto.' . $this->Proyecto->primaryKey => $id));
			$this->request->data = $this->Proyecto->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Proyecto->id = $id;
		if (!$this->Proyecto->exists()) {
			throw new NotFoundException(__('Proyecto Inválido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Proyecto->delete()) {
			$this->Session->setFlash(__('El proyecto ha sido borrado.'));
		} else {
			$this->Session->setFlash(__('El proyecto no pudo ser borrado, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
