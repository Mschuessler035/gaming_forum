<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Margarine' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
		<?php get_header() ?>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<h1><?php bloginfo('name') ?><img src="wp-content/themes/myfirsttheme/images/gs-icon-60.png" alt="icon"></h1>
				
			</header>
			
			<nav id="primary-nav">
				<?php get_template_part('nav') // includes nav.php ?>
			</nav>
			
			<div id="main">
				<div class="row">
					<!-- MAIN COLUMN -->
					<div class="span8">
						<?php 
							/**
							 * check to see if the current request...
							 * is_category()
							 * is_front_page()
							 * is_home()
							 * is_404()
							 * is_archive()
							 * is_page()
							 * is_single() --> e.g. a single post
							 * is_tag()
							 * is_search() --> a page display search results
							 */
							if  (is_front_page()) {
								// Include file name content-home.php
								get_template_part('content','home');
							
							} elseif (is_page() || is_single()) {
								// Include file named content-single.php
								get_template_part('content','single');
							} elseif (is_search()) {
								// Include file named content-search.php
								get_template_part('content','search');
							} elseif (is_category()) {
								$cat = get_category(get_query_var('cat'),false);
								if (stristr($cat->slug, 'news')) {
									get_template_part('content','news');
								} elseif (stristr($cat->slug, 'posts')) {
									get_template_part('content','posts');
								}
							}
						?>
					</div>
					
					<!-- RIGHT SIDEBAR -->
					<div class="span3">
						<?php  get_sidebar() ?>
					</div>
				</div>
			<footer>
				<?php get_footer() ?>
			</footer>
			</div>
		</div>
	</body>
</html>