<div class="container">
	<h1 class="page-title">Edit Post</h1>
	<?php
		$post_id = $_GET['post_id'];
		
		$post = get_post($post_id);
	?>
	<div class="new-post-form">
		<form action="processors/edit-post.php" method="post">
			<label for="post_title">Post Title:</label>
			<input type="text" id="post_title" value="<?php echo $post['post_title'];?>" name="post_title" maxlength="100">
			
			<label for="category_name">Category Name:</label>
			<select name="category_name" id="category_name">
				<?php
					$categories = get_all_categories();
					foreach ($categories as $category) {
						echo '<option ' . ( $category['category_id'] == $post['category_id'] ? 'selected' : '' ) . ' value="' . $category['category_id'] . '">' . $category['category_name'] . '</option>';
					}
				?>
			</select>

			<label for="post_content">Post Content:</label>
			<textarea name="post_content" id="post_content"><?php echo $post['post_content'];?></textarea>
			
			<a href="<?php echo BASE_URL;?>admin/?page=all_posts" class="primary-btn f-left">Cancel</a>
				
			<input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>" >

			<input type="submit" name="edit_post_btn" class="primary-btn" value="Update" />
		</form>

		<div class="clear"></div>
	</div>
</div>