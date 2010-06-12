<?php
class EmailsController extends AppController {

	var $name = 'Emails';

	function index($id = null) {
		if (!empty($this->data)) {
			$this->loadModel('Emailer');
			$this->Emailer->create($this->data);
			if ($this->Emailer->validates()) {
				$this->Email->to = Configure::read('CONTACT_EMAIL');
				$this->Email->replyTo = $this->data['Emailer']['email'];
				$this->Email->from = $this->data['Emailer']['name'].' <'.$this->data['Emailer']['email'].'>';
				$this->Email->subject = 'Emailer Form: '.$this->data['Emailer']['subject'];
				//$this->Email->delivery = 'debug';
				if ($this->Email->send($this->data['Emailer']['message'])) {
					$this->Session->setFlash('Thank you for contacting us');
					//$this->redirect('/');
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
		$items = $this->Email->Item->find('list');
		$this->set(compact('items'));
	}

	function admin_index() {
		$this->Email->recursive = 0;
		$this->set('emails', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'email'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('email', $this->Email->read(null, $id));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'email'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Email->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'email'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'email'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Email->read(null, $id);
		}
		$items = $this->Email->Item->find('list');
		$this->set(compact('items'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'email'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Email->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Email'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Email'));
		$this->redirect(array('action' => 'index'));
	}
}
?>