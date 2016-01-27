<div class="container">
	<h1 class="page-title">Create a New Post</h1>
	<div class="new-post-form">
		<form action="processors/new-post.php" method="post">
			<label for="post_title">Post Title:</label>
			<input type="text" id="post_title" name="post_title" maxlength="100">
			
			<label for="category_name">Category Name:</label>
			<select name="category_name" id="category_name">
				<?php
					$categories = get_all_categories();
					foreach ($categories as $category) {
						echo '<option ' . ( $category['category_id'] == 0 ? 'selected' : '' ) . ' value="' . $category['category_id'] . '">' . $category['category_name'] . '</option>';
					}
				?>
			</select>

			<label for="post_content">Post Content:</label>
			<textarea name="post_content" id="post_content"></textarea>

			<input type="submit" name="new_post_btn" class="primary-btn" value="Publish Now" />
		</form>

		<div class="clear"></div>
	</div>
</div>