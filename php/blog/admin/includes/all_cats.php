<div class="container">
	<a class="add-new-btn" href="<?php echo BASE_URL;?>admin/?page=new-category">+ New Category</a>
	<h1 class="page-title">All Categories</h1>
	<table class="all-posts-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Category Name</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$all_cats = get_all_categories();
				foreach ($all_cats as $cat) {
					echo 
						"<tr>
							<td>{$cat['category_id']}</td>
							<td>{$cat['category_name']}</td>
							<td class='text-center'><a href='" . BASE_URL . "admin/?page=edit_cat&category_id={$cat['category_id']}'>Edit</a></td>
							<td class='text-center'>
								" . ( $cat['category_id'] == 0 ? "" : "<a class='delete-btn' href='" . BASE_URL . "admin/processors/delete-cat.php?category_id={$cat['category_id']}'>Delete</a>" ) . "
							</td>
						</tr>";	
				}
			?>
		</tbody>
	</table>
</div>