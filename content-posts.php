<h2 class="topic">Posts</h2>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
		<div class="display-post">
				<ul class="recent">
					<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
					<ul>
						<li>Posted: <?php the_time(get_option('date_format'));?> | by: <?php the_author(); ?></li>
					</ul>
				</ul>
		</div>
	<?php endwhile?>
<?php endif ?>