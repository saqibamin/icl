<?php require_once('load.php');?>

<?php require_once( BASE_PATH . '/includes/header.php' );?>
<?php require_once( BASE_PATH . '/includes/navigation.php' );?>
	
	<div class="site-wrapper">
		<div class="container">
			<div class="content-section">
				
				<?php
					
					// post_exists($post_id)
					if( isset($_GET['post_id']) && post_exists($_GET['post_id']) && !empty($_GET['post_id']) ) {
						require_once(BASE_PATH . '/includes/single.php');
					} else if( isset($_GET['cat']) ) {
						require_once(BASE_PATH . '/includes/category.php');
					} else if( isset($_GET['user_id']) ) {
						require_once(BASE_PATH . '/includes/user-posts.php');
					} else {
						require_once(BASE_PATH . '/includes/all-posts.php');
					} 

				?>
				
			</div>
			<?php require_once( BASE_PATH . '/includes/sidebar.php' );?>
		</div>
	</div>

<?php require_once( BASE_PATH . '/includes/footer.php' );?>