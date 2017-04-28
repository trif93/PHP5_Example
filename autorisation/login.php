<?php
	require "db.php";

	$data = $_POST;

	$errors = array();
	if( isset($data['do_login'])){
		$user = R::findOne('users', 'login = ?', array($data['login']));
		if($user){
			if(password_verify($data['password'], $user->password)){
				$_SESSION['logged_user'] = $user;
				header('Location: /');
			}else{
				$errors[] = 'Wrong password!';
			}
		}else{
			$errors[] = 'This user do not found!';
		}
		if(!empty($errors)){
			echo '<div id="errors" style="background-color: red;">'.array_shift($errors).'</div>';
		}
	}
?>

<form action="/login.php" method="POST">
	<p>
		<p>Your login:</p>
		<input type="text" name="login" value="<?php echo @$data['login']; ?>">
	</p>

	<p>
		<p>Your password:</p>
		<input type="password" name="password">
	</p>

	<p>
		<button type="submit" name="do_login">Log in</button>
	</p>

</form>