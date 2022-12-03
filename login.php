<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="login.css">

	<title>WEB LOGIN</title>
</head>
<body>
		<div class="gagal-login">
			<?php
				if(isset($_SESSION['error'])) {
			?>
			<div class="alert alert-warning" role="alert">
				<?php echo $_SESSION['error']?>
			</div>
				<?php
				}
			?>
		
		</div>

		<div class="body">
			<h1>MASUKAN AKUN ANDA</h1>
				<form action="cek_login.php" method="post">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" id="password" placeholder="Password">
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
		</div>
</body>
