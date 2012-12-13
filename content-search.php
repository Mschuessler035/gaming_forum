<div class="search-results">
	<?php if(have_posts()) : ?>
	<ul class="nav nav-tabs nav-stacked">
		<?php while(have_posts()) : the_post() ?>
			<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a>
		<?php endwhile?>
	</ul>
	<?php else: ?>
		<P class="alert">Sorry, there are no pages matching your search.</P>
	<?php endif ?>
</div>