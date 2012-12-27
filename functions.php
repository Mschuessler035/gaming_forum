<?php
// Register a single navigation menu, to be contructed 
// in the admin panel, and displayed sin nav.php
register_nav_menus(array(
	'primary' =>'Primary Navigation'		
));

function gamingforum_comment_form() {
	global $post;
	// value for the post "$post->id"
	?>
	<div id="commentform">
		<form method="post" action="<?php  bloginfo('url');?>/wp-comments-post.php">
			<input type="hidden" name="comment_post_ID" value="<?php echo $post->id; ?>" />
			<input type="hidden" name="comment_parent" id="comment_parent" value="0" />

			<h4>Name</h4><input name="author" type="text" placeholder="Name"/>
			<h4>Email</h4><input name="email" type="text" placeholder="John@appleseed.com"/>
			 
			<textarea name="comment" placeholder="Comment"></textarea>
			<input name="submit" type="submit" value="Post Comment"/>
		</form>
	</div>
	
	<?php 
	}
?>