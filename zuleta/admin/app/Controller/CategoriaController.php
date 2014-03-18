<?php
App::uses('AppController', 'Controller');
/**
 * Categoria Controller
 *
 * @property Categorium $Categorium
 * @property PaginatorComponent $Paginator
 */
class CategoriaController extends AppController {

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
		$this->Categorium->recursive = 0;
		$this->set('categoria', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Categorium->exists($id)) {
			throw new NotFoundException(__('Categoría Inválida.'));
		}
		$options = array('conditions' => array('Categorium.' . $this->Categorium->primaryKey => $id));
		$this->set('categorium', $this->Categorium->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->Categorium->create();
			if ($this->Categorium->save($this->request->data)) {
				$this->Session->setFlash(__('La categoría ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La categoría no pudo ser guardada, intente nuevamente.'));
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
		if (!$this->Categorium->exists($id)) {
			throw new NotFoundException(__('Categoría Inválida.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categorium->save($this->request->data)) {
				$this->Session->setFlash(__('La categoría ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La categoría no pudo ser guardada, intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Categorium.' . $this->Categorium->primaryKey => $id));
			$this->request->data = $this->Categorium->find('first', $options);
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
		$this->Categorium->id = $id;
		if (!$this->Categorium->exists()) {
			throw new NotFoundException(__('Categoría Inválida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Categorium->delete()) {
			$this->Session->setFlash(__('La categoría ha sido borrada.'));
		} else {
			$this->Session->setFlash(__('La categoría no pudo ser borrada, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Categorium->recursive = 0;
		$this->set('categoria', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Categorium->exists($id)) {
			throw new NotFoundException(__('Categoría Inválida.'));
		}
		$options = array('conditions' => array('Categorium.' . $this->Categorium->primaryKey => $id));
		$this->set('categorium', $this->Categorium->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Categorium->create();
			if ($this->Categorium->save($this->request->data)) {
				$this->Session->setFlash(__('La categoría ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La categoría no pudo ser guardada, intente nuevamente.'));
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
		if (!$this->Categorium->exists($id)) {
			throw new NotFoundException(__('Categoría Inválida.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categorium->save($this->request->data)) {
				$this->Session->setFlash(__('La categoría ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La categoría no pudo ser guardada, intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Categorium.' . $this->Categorium->primaryKey => $id));
			$this->request->data = $this->Categorium->find('first', $options);
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
		$this->Categorium->id = $id;
		if (!$this->Categorium->exists()) {
			throw new NotFoundException(__('Categoría Inválida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Categorium->delete()) {
			$this->Session->setFlash(__('La categoría ha sido borrada.'));
		} else {
			$this->Session->setFlash(__('La categoría no pudo ser borrada, intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
