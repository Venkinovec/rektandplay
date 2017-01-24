<? $time1 = microtime(); $time1 = explode(" ",$time1); $time1 = $time1[1] + $time1[0]; $rd = "10000"; ?>
<?php
session_start();
require_once('class.user.php');
$user = $login = $session = new USER();

if($user->is_loggedin()!="")
{
	$user->redirect('http://recandplay.cz/index.php');
}

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);
	$vupass = strip_tags($_POST['txt_vupass']);

	if($uname=="")	{
		$error[] = "Vyplň platné jméno!";	
	}
	else if($umail=="")	{
		$error[] = "Vyplň E-Mail!";	
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Vyplň platný E-Mail!';
	}
	else if($upass=="")	{
		$error[] = "Vyplň platné heslo!";
	}
	else if(strlen($upass) < 6){
		$error[] = "Heslo musí mít více jak 6 znaků!";	
	}
	else if($upass!=$vupass){
		$error[] = "Hesla se musí schodovat!";	
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			if($row['user_name']==$uname) {
				$error[] = "Jéje, toto jméno již někdo má!";
			}
			else if($row['user_email']==$umail) {
				$error[] = "Jéje, tento E-Mail již někdo má!";
			}
			else
			{
				if($user->register($uname,$umail,$upass)){	
					$user->redirect('sign-up.php?joined');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Rec & Play | Registrace</title>
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


<div class="container">
    	
        <form method="post" class="form-signin">
            <h2 class="form-signin-heading">Zaregistruj se</h2><hr />
            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-danger">
					 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp;<?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                 <div class="alert alert-success">
                      <i class="fa fa-check" aria-hidden="true"></i>&nbsp;Úspěšně zaregistrován, <a href="index.php">přihlaš se</a>!
                 </div>
				 <?php echo '<script>window.setTimeout(function(){ window.location.href = "http://recandplay.cz/sys/user/index.php"; }, 3000);</script>'?>
                 <?php
			}
			?>

			<div class="form-group">
				<label class="sr-only" for="txt_uname">Jméno</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
					<input type="text" class="form-control" name="txt_uname" placeholder="Přihlašovací jméno" value="<?php if(isset($error)){echo $uname;}?>" />
					<div class="input-group-addon"><i class="fa fa-certificate" aria-hidden="true"></i></div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="sr-only" for="txt_uname">E-Mail</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
					<input type="text" class="form-control" name="txt_umail" placeholder="E-Mail" value="<?php if(isset($error)){echo $umail;}?>" />
					<div class="input-group-addon"><i class="fa fa-certificate" aria-hidden="true"></i></div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="sr-only" for="txt_uname">Heslo</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
					<input type="password" class="form-control" name="txt_upass" placeholder="Heslo" />
					<div class="input-group-addon"><i class="fa fa-certificate" aria-hidden="true"></i></div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="sr-only" for="txt_uname">Heslo (ověření)</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
					<input type="password" class="form-control" name="txt_vupass" placeholder="Heslo (ověření)" />
					<div class="input-group-addon"><i class="fa fa-certificate" aria-hidden="true"></i></div>
				</div>
			</div>
			Souhlasím s TOS <input type="checkbox" name="TOS" required="required" />
            <div class="clearfix"></div><hr />
            <div class="form-group">
            	<button type="submit" class="btn btn-primary" name="btn-signup">
                	<i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Zaregistruj se
                </button>
            </div>
            <br />
<div class="alert alert-info">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;Už máš účet? <a href="/sys/user/index.php">Přihlaš se!</a>
</div>
        </form>
</div>

<div class="max-before"></div>
<?php include '/data/web/virtuals/136905/virtual/www/assets/sys/footer.php';?>
</body>
</html>