<?php 

include 'configloginadmin.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: read.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: read.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style-crud.css">

	<title>Login Form EngLearn</title>
</head>

<div class="log">
	<div class="login">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Admin EngLearn</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="back-home"> This page is only for authorized admins.</p>
			<p class="login-register-text">If you are not an Admin <a href="index.html">Please come here</a>.</p>
		</form>
	</div>
</div>
</html>