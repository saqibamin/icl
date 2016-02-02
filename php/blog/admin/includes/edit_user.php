<?php
	$user_id = (int) $_GET['user_id'];
	$user_data = get_user($user_id);
?>
<div class="container">
	<h1 class="page-title">Edit User Data</h1>
	<div class="new-post-form">
		<form action="processors/edit-user.php" method="post">
			<label for="full_name">User Full Name:</label>
			<input type="text" id="full_name" value="<?php echo $user_data['full_name'];?>" name="full_name" maxlength="30">
			
			<label for="username">Username:</label>
			<input type="text" id="username" value="<?php echo $user_data['username'];?>" name="username" maxlength="50">
			
			<label for="password">Password:</label>
			<input type="password" id="password" value="" name="password" maxlength="50">
				
			<input type="hidden" name="user_id" value="<?php echo $user_data['user_id'];?>">

			<a href="<?php echo BASE_URL;?>admin/?page=all_users" class="primary-btn f-left">Cancel</a>
			<input type="submit" name="edit_user_btn" class="primary-btn" value="Update User" />
		</form>

		<div class="clear"></div>
	</div>
</div>