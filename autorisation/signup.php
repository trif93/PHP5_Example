<?php
	require "db.php";

	$data = $_POST;
	if( isset($data['do_signup'])){
		$errors = array();
		if(trim($data['login'])==''){
			$errors[] = 'Input your login!';
		}
		if(trim($data['email'])==''){
			$errors[] = 'Input your email!';
		}
		if($data['password']==''){
			$errors[] = 'Input your password!';
		}
		if($data['password_r']!=$data['password']){
			$errors[] = 'Repeat your password rightly!';
		}
		if(R::count('users', "login = ?", array($data['login']))>0){
			$errors[] = 'This login already exists!';
		}
		if(R::count('users', "email = ?", array($data['email']))>0){
			$errors[] = 'This email already used!';
		}

		if(empty($errors)){
			$user = R::dispense('users');
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
			R::store($user);
			echo '<div id="errors" style="background-color: green;"> You are signed up successfull!</div>';
		}	else
		{
			echo '<div id="errors" style="background-color: red;">'.array_shift($errors).'</div>';
		}
	}

?>

<form action="/signup.php" method="POST">
	<p>
		<p>Your login:</p>
		<input type="text" name="login" value="<?php echo @$data['login']; ?>">
	</p>

	<p>
		<p>Your E-Mail:</p>
		<input type="email" name="email"  value="<?php echo @$data['email']; ?>">
	</p>

	<p>
		<p>Your password:</p>
		<input type="password" name="password">
	</p>

	<p>
		<p>Please, repeat your password:</p>
		<input type="password" name="password_r">
	</p>

	<p>
		<button type="submit" name="do_signup">Sign up</button>
	</p>

</form>