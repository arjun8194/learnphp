<?php

	include '../lib/UserRegiserController.php';

	$obj = new UserRegiserController;


	$arr = [

		'first_name'  => $_POST['first_name'] ?? '',
		'last_name'  => $_POST['last_name'] ?? '',
		'email'  => $_POST['email'] ?? '',
		'password'  => $_POST['password'] ?? '',
		'repeat_password'  => $_POST['repeat_password'] ?? '',
	];

	$obj->userRegister($arr);
?>