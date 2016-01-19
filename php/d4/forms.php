<!DOCTYPE html>
<html>
<head>
	<title>Forms in HTML</title>
</head>
<body>
	
	<form method="post" action="handle_form.php">
		<label for="name">Your Name</label>
		<input name="name" placeholder="Type your name here" id="name" type="text" maxlength="50">
		<br /><br /> 
		
		<label for="email">Your Email</label>
		<input name="email" placeholder="Type your email here" id="email" type="email">
		<br /> <br /> 
		
		<label>Your Gender</label>
		<input id="male" value="male" name="gender" type="radio" checked="checked"><label for="male">Male</label>
		<input id="female" value="female" name="gender" type="radio" ><label for="female">Female</label>
		<br/><br/>
		
		Your Hobbies:
			<label><input name="hobbies" type="checkbox">Reading</label>
			<label><input name="hobbies" type="checkbox">Playing</label>
			<label><input name="hobbies" type="checkbox">Travelling</label>	

		<br /><br/>
		Date of Birth:
			<select name="dobd">
				<?php 
					for($i = 1; $i <= 31; $i++) {
						echo '<option value="' . $i . '">' . $i . '</option>';
					}
				?>
			</select> - 
			<select name="dobm">
				<?php 
					for($i = 1; $i <= 12; $i++) {
						echo '<option value="' . $i . '">' . $i . '</option>';
					}
				?>
			</select> - 
			<select name="doby">
				<?php 
					for($i = date('Y'); $i >= date('Y') - 80; $i-- ) {
						echo '<option value="' . $i . '">' . $i . '</option>';
					}
				?>
			</select>
		
		<br /><br />
		
		Comments (if any)<br />
		<textarea name="comments" rows="7" cols="50"></textarea>

		<br /><br />
	
		<input type="reset">
		<input type="submit" value="Sign Up Now">
	</form>

</body>
</html>