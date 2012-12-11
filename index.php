<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
	
		<title><?php echo get_bloginfo('name') ?></title>
	</head>
	<body>
		<h1><?php bloginfo('name') ?></h1>
		<P><?php bloginfo('description') ?></P>
		
		<div class="posts">
		
		<!-- Method #1
			<?php if(have_posts()) :?>
				<?php while(have_posts()) : ?>
					<?php the_post() ?>
					<h2><a href="<?php the_permalink() ?>"></a></h2>
				<?php endwhile ?>
			<?php endif ?> 
						-->
		
		<!--  METHOD #2 
		<?php 
			if(have_posts) {
				while(have_posts()) {
					the_post(); // sets up *this* post's data
					
					// Display whateer information about the post tat you like
					echo '<h2>';
					the_title();
					echo '</h2>';
					the_content();
				}
			}
		?>
		-->
		</div>
	</body>
</html>