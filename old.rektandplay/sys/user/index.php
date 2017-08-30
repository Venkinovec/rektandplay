<? $time1 = microtime(); $time1 = explode(" ",$time1); $time1 = $time1[1] + $time1[0]; $rd = "10000"; ?>
<?php
session_start();
require_once("class.user.php");
$user = $login = $session = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('http://recandplay.cz/index.php');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('http://recandplay.cz/index.php');
	}
	else
	{
		$error = "Špatné jméno, nebo heslo!";
	}	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Coding Cage : Login</title>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/head.php';?>
</head>
<body>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/navigation.php';?>
	<!--start-mid-section-->
	<div class="container">
		<div class="mid-section">
			<div class="mid-top">
				<div class="col-md-12 mid-text">
					<h3>Jsi věrný fanoušek? Zaregistruj se!</h3>
					<p>Jako zaregistrovaný v databázi máš jisté funkce a nástroje zcela zdarma k používání, <a>více zde</a>!</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div><br />
	<!--//end-mid-section-->
<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Přihlaš se</h2><hr />
        
        <div id="error">
        <?php
			if(isset($error))
			{
				?>
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp;<?php echo $error; ?>
                </div>
                <?php
			}
		?>
        </div>
		
		<div class="form-group">
			<label class="sr-only" for="txt_uname">Jméno nebo E-Mail</label>
			<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
				<input type="text" class="form-control" name="txt_uname_email" placeholder="Jméno nebo E-Mail" required />
				<span id="check-e"></span>
				<div class="input-group-addon"><i class="fa fa-certificate" aria-hidden="true"></i></div>
			</div>
		</div>
		
		<div class="form-group">
			<label class="sr-only" for="txt_uname">Heslo</label>
			<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
				<input type="password" class="form-control" name="txt_password" placeholder="Heslo" />
				<span id="check-e"></span>
				<div class="input-group-addon"><i class="fa fa-certificate" aria-hidden="true"></i></div>
			</div>
		</div><br />
        <div class="form-group">
            <button type="submit" name="btn-login" class="btn btn-default">
                	<i class="fa fa-key" aria-hidden="true"></i>&nbsp;Přihlaš se
            </button>
        </div>  
      	<br />
<div class="alert alert-info">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;Ještě nemáš účet? <a href="/sys/user/index.php">Zaregistruj se!</a>
</div>
      </form>

    </div>
    
</div><div class="max-before"></div>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/footer.php';?>
</body>
</html>