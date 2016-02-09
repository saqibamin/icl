<?php
	$post_id = (int) $_GET['post_id'];
	$post = get_post($post_id);
?>
	
	<div class="post">
		<a href="<?php echo BASE_URL; ?>?post_id=<?php echo $post['post_id']; ?>">
			<h2><?php echo $post['post_title'];?></h2>
		</a>
		<div class="post-meta">
			<?php $user = get_user($post['user_id']);?>
			<?php echo $post['publish_date']?> | <?php echo get_user_name_by_id($post['user_id']);?>
		</div>

		<div class="post-excerpt">
			<?php
				$post_content =  $post['post_content'];
				echo $post_content;
			?>
		</div>
	</div>