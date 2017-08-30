<!DOCTYPE html>
<html>
<head>
	<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>
	<?php Theme::plugins('siteBodyBegin') ?>

	<header class="clearfix container">
	<hgroup>
		<br>
			<h1><a href="<?php echo $Site->url().'' ?>"><?php echo $Site->title() ?></a></h1>
			<h2><a href="/"><?php echo $Site->slogan() ?></a></h2>
	</hgroup>
	<nav role="navigation">
		<ul>
			<li><a href="<?php echo $Site->url().'' ?>">Home</a></li>
			<?php
				$parents = $pagesParentsPublished[NO_PARENT_CHAR];
				foreach($parents as $Parent) {
				echo '<li><a href="'.$Parent->permalink().'">'.$Parent->title().'</a></li>';
				}
			?>
		</ul>
	</nav>
	</header>

	<div class="container">

		<aside role="complimentary" id="complimentary">

			<div class="widget" id="status">
				<h4 class="widget-title">Admin</h4>
				<div class="widget-content">
					<a href="<?php echo $Site->url().'admin/' ?>" class="button"><?php $L->p('Login') ?></a>
				</div><!-- .widget-content -->
			</div><!-- .widget -->

			<div class="widget" id="status">
				<h4 class="widget-title">Sdilej nas!</h4>
				<div class="widget-content">
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_dd" href="https://www.addtoany.com/share?linkurl=<?php echo $Site->url().'' ?>&amp;linkname=<?php echo $Site->title() ?>|<?php echo $Site->slogan() ?>"></a>
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_google_plus"></a>
					</div>
				</div><!-- .widget-content -->
			</div><!-- .widget -->

			<div class="widget" id="status">
				<h4 class="widget-title">Server Status</h4>
				<div class="widget-content">
					<h5 class="online">Server Online</h5>
				</div><!-- .widget-content -->
			</div><!-- .widget -->

			<div class="widget" id="status">
				<h4 class="widget-title"><?php echo $Site->title() ?></h4>
				<div class="widget-content">
					<p><?php echo $Site->description() ?></p>
				</div><!-- .widget-content -->
			</div><!-- .widget -->

		</aside><!-- complimentary -->

	  <div id="content-before"></div>
	<div role="main" id="main">
		<?php
			if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') || ($Url->whereAmI()=='blog') )
			{
				include(THEME_DIR_PHP.'home.php');
			}
			elseif($Url->whereAmI()=='post')
			{
				include(THEME_DIR_PHP.'post.php');
			}
			elseif($Url->whereAmI()=='page')
			{
				include(THEME_DIR_PHP.'page.php');
			}
		?>

	<!-- Plugins site body end -->
	<?php Theme::plugins('siteBodyEnd') ?>

	</div><!-- main -->
		<div id="content-after"></div>
	</div><!-- .container -->

	<footer>
		<p><?php echo $Site->footer() ?></p>
	</footer>

</body>
</html>