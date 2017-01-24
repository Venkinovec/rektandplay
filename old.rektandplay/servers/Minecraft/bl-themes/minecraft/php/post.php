<?php $User = $Post->user(); $author = $User->username(); ?>
<article>
	<?php Theme::plugins('postBegin') ?>

	<h3 class="blog_title" style="color: black">
		<a class="blog_title-link" href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a>
	</h3>

	<!-- Cover Image -->
	<?php
		if($Post->coverImage()) {
			echo '<a href="'.$Post->permalink().'" class="image featured"><img class="blog_cover" src="'.$Post->coverImage().'" alt="Cover Image"></a><hr>';
		}
	?>

	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $Post->content() ?><hr>

	<small>
		<date-stamp style="text-align: left; float: left"><?php echo $Post->date() ?></date-stamp>
		<author_blog style="text-align: right; float: right">Napsal: <i><?php echo $author ?></i></author_blog>
	</small><br>

	<!-- Post's tags -->
	<?php
		$tags = $Post->tags(true);
		foreach($tags as $tagKey=>$tagName) {
			echo '<small>#<a class="blog_tag" href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a></small>, ';
		}
	?>

	<?php Theme::plugins('postEnd') ?>
</article>