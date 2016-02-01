<div class="container">
	<h1 class="page-title">Edit Category</h1>
	<?php
		$category_id = (int) $_GET['category_id'];
		
		$category = get_category($category_id);
	?>
	<div class="new-post-form">
		<form action="processors/edit-cat.php" method="post">
			<label for="post_title">Category Name:</label>
			<input type="text" id="category_name" value="<?php echo $category['category_name'];?>" name="category_name" maxlength="50">
			
			<a href="<?php echo BASE_URL;?>admin/?page=all_cats" class="primary-btn f-left">Cancel</a>
				
			<input type="hidden" name="category_id" value="<?php echo $category['category_id']; ?>" >

			<input type="submit" name="edit_cat_btn" class="primary-btn" value="Update" />
		</form>

		<div class="clear"></div>
	</div>
</div>