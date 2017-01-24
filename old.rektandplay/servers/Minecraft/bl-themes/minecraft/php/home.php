<!-- Show each post on this page -->
<?php foreach ($posts as $Post): ?>

<article>
	<!-- Show plugins, Hook: Post Begin -->
	<?php Theme::plugins('postBegin') ?>
<h3 class="blog_title" style="color: black"><a class="blog_title-link" href="<?php echo $Post->permalink() ?>"><?php echo $Post->title() ?></a></h3>
	                <?php
	                	// Get the user who created the post.
	                	$User = $Post->user();

	                	// Default author is the username.
	                	$author = $User->username();

	                	// If the user complete the first name or last name this will be the author.
				//if( Text::isNotEmpty($User->firstName()) || Text::isNotEmpty($User->lastName()) ) {
					//$author = $User->firstName().' '.$User->lastName();
				//}
			?>

	<!-- Cover Image -->
	<?php
		if($Post->coverImage()) {
			echo '<a href="'.$Post->permalink().'" class="image featured"><img class="blog_cover" src="'.$Post->coverImage().'" alt="Cover Image"></a><hr>';
		}
	?>

	<!-- Post's content, the first part if has pagebrake -->
	<?php echo $Post->content(false) ?>

<hr>
<small><date-stamp style="text-align: left; float: left"><?php echo $Post->date() ?></date-stamp>
			<author_blog style="text-align: right; float: right">Napsal: <i><?php echo $author ?></i></author_blog></small>
	<br>
		<!-- Post's tags -->
		<?php
			$tags = $Post->tags(true);
			foreach($tags as $tagKey=>$tagName) {
				echo '<small>#<a class="blog_tag" href="'.HTML_PATH_ROOT.$Url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a></small>, ';
			}
		?>

	<!-- Plugins Post End -->
	<?php Theme::plugins('postEnd') ?>
</article>

<?php endforeach; ?>

<!-- Pagination -->
<?php
	if( Paginator::get('showNewer') ) {
		echo '<a href="'.Paginator::urlPrevPage().'" class="button">'.$Language->get('Next page').'</a>';
	}

	if( Paginator::get('showOlder') ) {
		echo '<a href="'.Paginator::urlNextPage().'" class="button">'.$Language->get('Prev page').'</a>';
	}
?>