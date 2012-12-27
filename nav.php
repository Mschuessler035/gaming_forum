<?php
$options = array(
		'hide_empty' => 0
);

$categories = get_categories($options);

$menu_items = array();

// Build a list of aprent categories
foreach($categories as $cat) {
	if($cat->category_parent == 0 && $cat->cat_name !='Uncategorized') {
		// Must be a top-level category
		$menu_items[$cat->cat_ID] = array(
				'name' => $cat->cat_name
		);
	}
}
?>
	<ul>
	<li>
	<?php 
		// Display our 'primary' navigation menu
		wp_nav_menu(array(
			'theme_location' => 'priamry'
		));
	?>
	</li>
	<?php foreach($menu_items as $parent): ?>
		<li>
			<a href="<?php echo get_bloginfo('url').'/category/'.$parent['name'] ?>"> <?php echo $parent['name'] ?></a>
		</li>
	<?php endforeach ?>
</ul>