<div class="container">
	<a class="add-new-btn" href="<?php echo BASE_URL;?>admin">+ New Post</a>
	<h1 class="page-title">All Posts</h1>
	<table class="all-posts-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Post Title</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$all_posts = get_all_posts();
				foreach ($all_posts as $post) {
					echo 
						"<tr>
							<td>{$post['post_id']}</td>
							<td>{$post['post_title']}</td>
							<td class='text-center'><a href='" . BASE_URL . "admin/?page=edit_post&post_id={$post['post_id']}'>Edit</a></td>
							<td class='text-center'><a class='delete-btn' data-msg='Do you really want to delete this post?' href='" . BASE_URL . "admin/processors/delete-post.php?post_id={$post['post_id']}'>Delete</a></td>
						</tr>";	
				}
			?>
		</tbody>
	</table>
</div>