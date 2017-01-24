<? $time1 = microtime(); $time1 = explode(" ",$time1); $time1 = $time1[1] + $time1[0]; $rd = "10000"; ?>
<?php

	require_once("/data/web/virtuals/136905/virtual/www/sys/user/class.user.php");
	$auth_user = new USER();
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>