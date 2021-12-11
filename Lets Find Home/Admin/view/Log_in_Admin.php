<?php
session_start();
$masage =  $masage3 = $masage2 = "";
$uname = $pass = "";
$unameErr = $passErr = "";

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


if (isset($_POST["submit"])) {

	$uname = test_input($_POST["uname"]);
	$pass = test_input($_POST["pass"]);

	$datas = array(
		'uname' => $uname,
		'pass' => $pass,
		'Message' => ""
	);

	require_once '../controller/Validate_login.php';

	$login = new login($datas);

	$login->check_login($datas);
	$error = $login->get_error();
	$message = $login->get_message();
	$err_msg = $login->error_message();

	$unameErr = $error["unameErr"];
	$passErr = $error["passErr"];

	if (!empty($_POST['remember'])) {
		setcookie("uname", $_POST['uname'], time() + 20);
		setcookie("pass", $_POST['pass'], time() + 20);
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Admin_sty.css">
	<style type="text/css">
		.error {
			color: red;
		}
	</style>

</head>

<body>
	<form method="post" id="a_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<div class="center">
			<h1>Admin's Login</h1>
			<div class="text-field">
				<label>User Name</label><br>
				<input type="text" name="uname" id="uname" value="<?php if (isset($_COOKIE['uname'])) {
																		echo $_COOKIE['uname'];
																	} else {
																		echo $uname;
																	} ?>">

			</div><br>
			<span id="error" style="color: red;"><?php if (isset($unameErr)) {
									echo $unameErr;
								} ?></span>
			<div class="text-field">
				<label>Password</label><br>

				<input type="Password" name="pass" id="pass" value="<?php if (isset($_COOKIE['pass'])) {
																		echo $_COOKIE['pass'];
																	} else {
																		echo $pass;
																	} ?>">
			</div><br>
			<span id="p_error" style="color: red;"><?php if (isset($passErr)) {
									echo $passErr;
								} ?></span>
			<div><br>
				<label>
					<input type="checkbox" name="remember">
					Remember Me
				</label>
			</div><br>
			<div>
				<input type="submit" type="submit" name="submit" value="Login">
			</div><br><br><br><br>
			<div>
				<span style="color: red;">
					<?php
					if (isset($err_msg)) {
						echo $err_msg;
					}
					?>
				</span>
			</div>
		</div>
		</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$('#uname').keyup(function() {

			var x = $('#uname').val();

			if (x == "") {

				$('#error').html("Username Cannot be empty");


			} else {

				$('#error').html("");


			}
		})

		$('#pass').keyup(function() {

			var y = $('#pass').val();

			if (y == "") {

				$('#p_error').html("Password Cannot be Empty");


			} else {

				$('#p_error').html("");


			}
		})

		$('#a_form').submit(function() {

			var unameError = "";
			var passError = "";

			var x = $('#uname').val();
			var y = $('#pass').val();

			if (x == "") {
				unameError = "Error";
				$('#error').html("Username Cannot be empty");
			} else {
				unameError = "";
				$('#error').html("");

			}

			if (y == "") {

				passError = "Error";

				$('#p_error').html("Password Cannot be Empty");


			} else {

				passError = "";

				$('#p_error').html("");


			}

			if (unameError != "" || passError != "") {
				return false;

			} else if (unameError == "" && passError == "") {
				return true;
			}




		})
	</script>
</body>

</html>