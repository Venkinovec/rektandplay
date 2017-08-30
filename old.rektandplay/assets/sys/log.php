<?php

	session_start();
	
	require_once '/data/web/virtuals/136905/virtual/www/sys/user/class.user.php';
	$user = $login = $session = new USER();
	
	if(!$session->is_loggedin())
	{
		// session no set redirects to login page
		$session->redirect('/index.php');
	}
?>