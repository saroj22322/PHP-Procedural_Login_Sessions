<!DOCTYPE html>
<html>
<head>
	<title>Login System</title>
	<style type="text/css">
		.container {
			margin: 100px auto;
		}
		.form {
			min-width: 500px;
			max-width: 500px;
			margin: 100px auto;
		}
		.inp {
			padding: 5px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="form">
		<h2 class="title">Admin Registration</h2>
		<form method="POST" action="file.php">
			<div class="inp">
				<label for="username">Username : </label>
				<input type="text" name="username" max="50" min="5">
			</div>
			<div class="inp">
				<label for="email">Email : </label>
				<input type="email" name="email">
			</div>
			<div class="inp">
				<label for="password">Password : </label>
				<input type="password" name="password" min="5" max="20">
			</div>
			<div class="inp">
				<label for="password_re">Re-password : </label>
				<input type="password" name="password_re" min="5" max="20">
			</div>
			<div class="inp">
				<button type="submit" name="submit_areg">Submit</button>
			</div>
		</form>
	</div>
</div>
</body>
</html>