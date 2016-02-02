<div class="container">
	<h1 class="page-title">Create a New User</h1>
	<div class="new-post-form">
		<form action="processors/new-user.php" method="post">
			<label for="full_name">User Full Name:</label>
			<input type="text" id="full_name" name="full_name" maxlength="30">
			
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" maxlength="50">
			
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" maxlength="50">
			
			<input type="submit" name="new_user_btn" class="primary-btn" value="Create User" />
		</form>

		<div class="clear"></div>
	</div>
</div>