<?php
class MessagesController extends AppController {

	var $name = 'Messages';
	var $components = array('Email');

	function index($id = null) {
		if (!empty($this->data)) {
			$this->Message->create($this->data);
			if ($this->Message->validates()) {
				$this->Email->to = Configure::read('CONTACT_EMAIL');
				$this->Email->replyTo = $this->data['Message']['email'];
				$this->Email->from = $this->data['Message']['name'].' <'.$this->data['Message']['email'].'>';
				$this->Email->subject = 'Stinson L-5 Stuff: '.$this->data['Message']['subject'];
				$this->Email->template = 'contact';
				$this->Email->sendAs = 'text';
				$this->set('items', $this->Message->Item->find('list'));
				$this->set('data', $this->data);
				if ($this->Email->send()) {
					$this->Session->setFlash('Thank you for contacting us');
					$this->redirect('/');
				} else {
					$this->Session->setFlash(__('There was an error sending your email. Please try again in a few minutes.', true));
				}
			} else {
				$this->Session->setFlash(__('Please correct the following errors', true));
			}
		}
		if (isset($id)) {
			$this->data['Item']['Item'] = explode(',', $id);
		}
		$items = $this->Message->Item->find('list');
		$this->set(compact('items'));
	}

	function admin_index() {
		$this->Message->recursive = 0;
		$this->set('messages', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'email'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('email', $this->Message->read(null, $id));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'email'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Message->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'email'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'email'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Message->read(null, $id);
		}
		$items = $this->Message->Item->find('list');
		$this->set(compact('items'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'email'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Message->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Email'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Email'));
		$this->redirect(array('action' => 'index'));
	}
}
?>