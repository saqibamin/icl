<?php
	$category_id = (int) $_GET['cat'];
	$category_data = get_category($category_id);
	echo '<h1 class="cat-title">' . $category_data['category_name'] . '</h1>';
	$all_posts = get_category_posts($category_id);
	foreach ($all_posts as $post) {
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
					$post_content =  strip_tags($post['post_content']);
					
					// less than 200

					if( strlen($post_content) > 200 )
						$post_content = substr($post_content, 0, 200) . '...';
					
					echo $post_content;
				?>
			</div>
		</div>
<?php
	} // end foreach
?>

<div class="pagination">
		
	<?php
		$total_posts = get_cat_posts_count($category_id);
		// 25
		$post_per_page = get_posts_per_page(); // 4
		$total_pages = ceil( $total_posts / $post_per_page );

		for( $i = 1; $i <= $total_pages; $i++ )
			echo '<a href="' . BASE_URL . '?cat=' . $category_id . '&paged=' . $i . '" class="' . ( $i == get_current_page() ? 'current-page' : '' ) . '">' . $i . '</a>';

	?>
</div>