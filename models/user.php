<?php
class User extends AppModel {
	var $name = 'User';
	
	var $actsAs = array(
		'Welcome.Membership' => array(
			'fields' => array(
				'username' => 'email',
				'password' => 'password',
				'old_password' => 'old_password',
				'confirm_password' => 'confirm_password',
			)
		)
	);
}
?>