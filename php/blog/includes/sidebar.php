<div class="sidebar">
	
	<div class="side-box">
		<h3>Categories</h3>
		<?php $categories = get_all_categories(); ?>
		<?php if (count($categories) > 0) { ?>
			<ul>
				<?php foreach ($categories as $category) { ?>
					<li><a href="<?php echo BASE_URL; ?>?cat=<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></a></li>
				<?php } ?>
			</ul>
		<?php } ?>
	</div>
	
	<div class="side-box">
		<h3>Users</h3>
		<?php $users = get_all_users(); ?>
		<?php if (count($users) > 0) { ?>
			<ul>
				<?php foreach ($users as $user) { ?>
					<li><a href="<?php echo BASE_URL; ?>?user_id=<?php echo $user['user_id']; ?>"><?php echo $user['full_name']; ?></a></li>
				<?php } ?>
			</ul>
		<?php } ?>
	</div>
	

</div>