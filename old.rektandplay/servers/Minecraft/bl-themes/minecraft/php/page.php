<article class="post">
	<?php Theme::plugins('pageBegin') ?>

	<header>
		<div class="title">
			<blog_page-title><a class="blog_page-title" href="<?php echo $Page->permalink() ?>"><?php echo $Page->title() ?></a></blog_page-title>
			<p><small><?php echo $Page->description() ?></small></p>
		</div>
	</header>

	<?php
		if($Page->coverImage()) {
			echo '<hr><a href="'.$Page->permalink().'" class="image featured"><img class="blog_cover" src="'.$Page->coverImage().'" alt="Cover Image"></a><hr>';
		}
	?>

	<?php echo $Page->content() ?>

	<?php Theme::plugins('pageEnd') ?>
</article>