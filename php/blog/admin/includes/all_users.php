<div class="container">
	<a class="add-new-btn" href="<?php echo BASE_URL;?>admin/?page=create_user">+ New User</a>
	<h1 class="page-title">All Users</h1>
	<table class="all-posts-table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Full Name</th>
				<th>Username</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$all_users = get_all_users();
				foreach ($all_users as $user) {
					echo 
						"<tr>
							<td>{$user['user_id']}</td>
							<td>{$user['full_name']}</td>
							<td>{$user['username']}</td>
							<td class='text-center'><a href='" . BASE_URL . "admin/?page=edit_user&user_id={$user['user_id']}'>Edit</a></td>
							<td class='text-center'>
								" . ( $user['user_id'] == $_SESSION['user_id'] ? "" : "<a class='delete-btn' data-msg='Do you really want to delete this user?\nWarning!\nAll posts of this user will also be deleted.' href='" . BASE_URL . "admin/processors/delete-user.php?user_id={$user['user_id']}'>Delete</a>" ) . "
							</td>
						</tr>";	
				}
			?>
		</tbody>
	</table>
</div>