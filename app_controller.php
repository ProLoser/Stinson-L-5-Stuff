<?php
/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	var $components = array(
			'Auth',
			'Session',
			'DebugKit.Toolbar',
		);
		var $helpers = array(
			'Form', 
			'Html',
			'Session',
			'Items',
		);

		function beforeFilter() {
			$this->__configureAuth();
		}

		function beforeRender() {
			if ($this->_prefix()) {
				$this->layout = 'admin';
			} else {
				$this->loadModel('Category');
				$this->set('navCategories',$this->Category->find('list'));
			}
		}

		/**
		 * Checks to see what the current prefix in use is. Checks for 'admin' by
		 * default.
		 *
		 * @return boolean
		 * @access protected
		 **/
		function _prefix($prefix = 'admin') {
			if (isset($this->params['prefix']) && $this->params['prefix'] == $prefix) {
				return true;
			}
			return false;
		}

		/**
		 * Configures the AuthComponent according to the application's settings
		 *
		 * @return void
		 * @access private
		 */
		function __configureAuth() {
			if ($this->_prefix('admin')) {
				$this->Auth->deny();
			} else {			
				$this->Auth->allow();
			}

			$this->Auth->fields = array('username' => 'email', 'password' => 'password');
			$this->Auth->loginAction = array('plugin' => null, 'admin' => false, 'controller' => 'users', 'action' => 'login');
			$this->Auth->logoutRedirect = '/';
			$this->Auth->loginRedirect = '/';
		}
}
?>