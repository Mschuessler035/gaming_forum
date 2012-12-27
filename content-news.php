<!--  
<div class="display-post">
	<h2>News</h2>
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post('news') ?>
			<div class="post-info">
				<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
				<h5 class="date"><?php the_time(get_option('date_format'));?></h5>
			</div>
		<?php endwhile?>
	<?php endif ?>
</div>
-->

<h2 class="topic">News</h2>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
		<div class="display-post">
				<ul class="recent">
					<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
					<ul>
						<li><?php the_time(get_option('date_format'));?></li>
					</ul>
				</ul>
		</div>
	<?php endwhile?>
<?php endif ?>