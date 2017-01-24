	<!-- Meta & Title -->
	<title><?php echo $Site->title() ?> | <?php echo $Site->slogan() ?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="author" content="Josef Debnár (DontKill_CZ)">
	<meta name="description" content="<?php echo $Site->description() ?>">
	<meta name="keywords" content="">

	<!-- CSS -->
	<?php Theme::css('crafty.css') ?>

	<!-- Javascript -->
	<?php Theme::javascript('fontloader.js') ?>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.5.3/modernizr.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<!-- Plugins site head -->
	<?php Theme::plugins('siteHead') ?>

	<!-- Add to Any -->
	<script>
	var a2a_config = a2a_config || {};
	a2a_config.linkname = "<?php echo $Site->title() ?> | <?php echo $Site->slogan() ?>";
	a2a_config.linkurl = "<?php echo $Site->url().'' ?>";
	a2a_config.locale = "cs";
	</script>
	<script async src="https://static.addtoany.com/menu/page.js"></script>