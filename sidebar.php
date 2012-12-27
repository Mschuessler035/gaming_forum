<form class="form" action="<?php bloginfo('url') ?>">
	<div class="input-append">
		<input class="span2" type="text" name="s" placeholder="search"/>
		<button class="btn" type="submit"><i class="icon-search"></i></button>
	</div>
</form>


<?php global $current_user;
      get_currentuserinfo();
?>

<?php $user_info = get_userdata(1);
      $username = $user_info->display_name;
      $first_name = $user_info-> user_firstname;
      $last_name = $user_info-> user_lastname;
      $avatar = $user_info-> get_avatar;
?>

<div id="user-info">
	<h3>Account Info</h3>
		<?php echo get_avatar($username) ?>
		<div class="name">First &amp; Last Name: </div> <?php echo $first_name .' '. $last_name ?>
		<div class="name">Username: </div> <?php echo $username ?>
</div>