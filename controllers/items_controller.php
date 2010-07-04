<?php
class ItemsController extends AppController {

	var $name = 'Items';

	function index() {
		$this->Item->recursive = 1;
		$this->set('items', $this->paginate());
		$this->set('notes', $this->Item->Note->find('all'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'item'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('item', $this->Item->read(null, $id));
	}
	
	function category($id = null) {
		$category = null;
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'category'));
			$this->redirect(array('action' => 'index'));
		}
		$category = $this->Item->Category->find('first', array(
			'conditions' => array('Category.id' => $id),
			'contain' => false,
		));

		if (!$category) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'category'));
			$this->redirect(array('action' => 'index'));
		}

		$this->Item->unbindModel(array('hasAndBelongsToMany' => array('Category')));
		$this->Item->bindModel(array(
			'hasOne' => array(
				'CategoriesItem',
				'FilterCategory' => array(
					'className' => 'Category',
					'foreignKey' => false,
					'conditions' => array('FilterCategory.id = CategoriesItem.category_id')
		))), false);

		$this->paginate['Item'] = array(
			'conditions' => array('FilterCategory.id' => $id),
			'contain' => array('Category', 'CategoriesItem', 'FilterCategory'),
			'fields' => array('Item.*')
		);
		$this->Item->recursive = -1;
		$this->Item->Category->recursive = -1;
		$this->Item->CategoriesItem->recursive = -1;
		$this->Item->FilterCategory->recursive = -1;
		$items = $this->paginate();

		$notes = $this->Item->Note->find('all');
		$this->set(compact('category', 'items', 'notes'));
	}

	function admin_index() {
		$this->Item->recursive = 0;
		$this->set('items', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'item'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('item', $this->Item->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Item->create();
			if ($this->Item->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'item'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'item'));
			}
		}
		$categories = $this->Item->Category->find('list');
		$notes = $this->Item->Note->find('list');
		$this->set(compact('categories', 'notes'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'item'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Item->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'item'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'item'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Item->read(null, $id);
		}
		$categories = $this->Item->Category->find('list');
		$notes = $this->Item->Note->find('list');
		$this->set(compact('categories', 'notes'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'item'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Item->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Item'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Item'));
		$this->redirect(array('action' => 'index'));
	}
}
?>