<?php
class UsersController extends AppController {

	var $name = 'Users';

	function beforeFilter() {
		parent::beforeFilter();
	}

	function admin_index() {
		$this -> User -> recursive = 0;
		$this -> set('users', $this -> paginate());
	}

	function admin_edit($id =null) {

		if(!$id && empty($this -> data)) {
			$this -> Session -> setFlash(__('Invalid user', true));
			$this -> redirect( array('action' => 'index'));
		}

		if(!empty($this -> data)) {
			if($this -> User -> save($this -> data)) {
				$this -> Session -> setFlash(__('The user has been saved', true));
				$this -> redirect( array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if(empty($this -> data)) {
			$this -> data = $this -> User -> read(null, $id);
		}

		$roles = $this -> User -> Role -> find('list');
		$this -> set(compact('roles'));
	}

	function admin_login() {
		$this -> set("login", true);
	}

	function admin_logout() {
		$this -> redirect($this -> Auth -> logout());
	}

}
?>