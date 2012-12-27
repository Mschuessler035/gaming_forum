<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post() ?>
		<div class="display-post">
			<h2>Recent Posts</h2>
				<ul class="recent">
				<?php
					$args = array( 'numberposts' => '5' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li class="recent"><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
					}
				?>
				</ul>
		</div>
	<?php endwhile?>
<?php endif ?>


