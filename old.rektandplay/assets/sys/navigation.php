<?php if ($userRow['user_perms'] == 0){
		$Group = Uživatel;
	} else {
		$Group = Admin;
	}
?>
<div id="na">
<div class="container">
<ul class="na">
	<?php if ($session->is_loggedin()) { ?>
		<li class="na" style="float:left"><a>[#ID-<?php echo($userRow['user_id']);?>]</a></li>
		<li class="na" style="float:left">||</li>
		<li class="na" style="float:left"><a><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo($userRow['user_email']); ?></a></li>
		<li class="na" style="float:left">||</li>
		<li class="na" style="float:left"><a><i class="fa fa-user" aria-hidden="true"></i> <?php echo($userRow['user_name']) . " (" . $Group .")"; ?></a></li>
		<li class="na" style="float:right"><a href="/sys/user/logout.php?logout=true"><i class="fa fa-sign-out" aria-hidden="true"></i> Odlásit se</a></li>
		<li class="na" style="float:right">||</li>
		<li class="na" style="float:right"><a href="/sys/tools/index.php"><i class="fa fa-wrench" aria-hidden="true"></i> Nástroje & Služby</a></li>
	<?php } else { ?>
		<li class="na" style="float:right"><a href="/sys/user/sign-up.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Zaregistrovat se</a></li>
		<li class="na" style="float:right"><a href="/sys/user/index.php"><i class="fa fa-key" aria-hidden="true"></i> Přihlásit se</a></li>
	<?php } ?>
</ul>
</div></div>
<div class="clearfix"></div>
<div class="header box css3-shadow" id="head">
	<div class="container">
		<div class="header-top">
			<div class="logo">
				<a href="/index.php"><img src="/assets/images/logo.jpg" alt=""/></a><br />
		  </div>
			<div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
			  <ul class="nav">
					<li><a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i> Domů</a></li>
					<li><a><i class="fa fa-newspaper-o" aria-hidden="true"></i> Novinky <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
						<ul>
							<li><a href="/galery/"><i class="fa fa-image" aria-hidden="true"></i> Galerie</a></li>
							<li><a href="/blog/"><i class="fa fa-pencil" aria-hidden="true"></i> Blog</a></li>
							<li><a href="/change-log.php"><i class="fa fa-calendar" aria-hidden="true"></i> Log změn</a></li>
                            <li><a href="/contact-us.php"><i class="fa fa-fax" aria-hidden="true"></i> Kontakt</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-server" aria-hidden="true"></i> Servery <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
						<ul>
							<li><a href="/servers/TeamSpeak 3/"><i class="fa fa-microphone" aria-hidden="true"></i> TeamSpeak 3</a></li>
							<li><a href="/servers/Minecraft/"><i class="fa fa-cube" aria-hidden="true"></i> Minecraft</a></li>
							<li><a href="/servers/TeamFortress 2/"><i class="fa fa-rocket" aria-hidden="true"></i> Team Fortress 2</a></li>
						</ul>
					</li>
					<li><a><i class="fa fa-user-secret" aria-hidden="true"></i> Správci <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
						<ul>
							<li><a href="../../profiles/admins/Teluro.php"><i class="fa fa-user" aria-hidden="true"></i> Teluro (Majitel)</a></li>
                            <li><a href="/profiles/admins/Centrik.php"><i class="fa fa-user" aria-hidden="true"></i> Centrik</a></li>
                            <li><a href="/profiles/admins/Wolftix.php"><i class="fa fa-user" aria-hidden="true"></i> Wolftix</a></li>					
						</ul>
					</li>
					<li><a><i class="fa fa-users" aria-hidden="true"></i> Členi <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
						<ul>
							<li><a href="/profiles/cleni/domiri.php"><i class="fa fa-user" aria-hidden="true"></i> Domiri</a></li>
                            <li><a href="/profiles/cleni/lubos151.php"><i class="fa fa-user" aria-hidden="true"></i> Lubos151</a></li>
                            <li><a href="/profiles/cleni/monkey.php"><i class="fa fa-user" aria-hidden="true"></i> Monkey</a></li>
                            <li><a href="/profiles/cleni/tecka.php"><i class="fa fa-user" aria-hidden="true"></i> Tečka</a></li>					
                            <li><a href="/profiles/cleni/venkin.php"><i class="fa fa-user" aria-hidden="true"></i> Venkin</a></li>					
                            <li><a href="/profiles/cleni/epix.php"><i class="fa fa-user" aria-hidden="true"></i> Epix</a></li>	
                            <li><a href="/profiles/cleni/annuska.php"><i class="fa fa-user" aria-hidden="true"></i> Annusska</a></li>
                            <li><a href="/profiles/cleni/dzoker.php"><i class="fa fa-user" aria-hidden="true"></i> Dzoker</a></li>
                            <li><a href="/profiles/cleni/simco.php"><i class="fa fa-user" aria-hidden="true"></i> SimCo</a></li>
                            <li><a href="/profiles/cleni/allypandacorn.php"><i class="fa fa-user" aria-hidden="true"></i> Ally PandaCorn</a></li>					
                            <li><a href="/profiles/cleni/mrtheandy.php"><i class="fa fa-user" aria-hidden="true"></i> MrTheAndy</a></li>														
						</ul>
 
							
					</li>
					<li><a><i class="fa fa-archive" aria-hidden="true"></i> Ostatní <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
						<ul>
							<li><a href="/about.php"><i class="fa fa-question-circle-o" aria-hidden="true"></i> O nás</a></li>
							<li><a href="/contact-us.php"><i class="fa fa-fax" aria-hidden="true"></i> Kontakt</a></li>
					
																	</ul>
				  </li>
				</ul>
				<script type="text/javascript" src="/assets/js/nav.js"></script>
				<script type="text/javascript" src="http://l2.io/ip.js?var=myip"></script>
				<script>
				function myFunction() {
					if (myip == "92.240.170.163") {
						 alert("DontKill_CZ");
					}
					else if (myip == "188.75.128.24") {
						 alert("Centřík");
					}
					else if (myip == "78.102.142.143") {
						 alert("TeluroCZ");
					}
					else {
						 alert("POUZE REGISTROVANÍ ČLENI MOHOU ZOBRAZIT TUTO ČÁST WEBU");
					}
				}
				</script>
			</div>
			<div class="clearfix"></div>
		</div><!-- end header_main4 -->
	</div>
</div>