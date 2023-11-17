<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<style>
		body {
			font-family: "Open Sans", sans-serif;
			color: #444444;
			background-color: #f2f2f2;
		}

		a {
			color: #f56e00;
			text-decoration: none;
		}

		a:hover {
			color: #f56e00;
			text-decoration: none;
		}

		.container {
			width: 300px;
			margin: 0 auto;
			margin-top: 100px;
			padding: 20px;
			background-color: #ffffff;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		h2 {
			font-family: "Roboto", sans-serif;
			text-align: center;
			margin-bottom: 20px;
		}

		form {
			text-align: center;
		}

		label {
			display: block;
			margin-bottom: 5px;
			text-align: left;
		}

		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #f56e00;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #ff7f00;
		}

		.back-button {
			display: inline-block;
			margin-top: 20px;
			background-color: #f56e00;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 4px;
			cursor: pointer;
		}

		.back-button:hover {
			background-color: #ff7f00;
		}

		.center {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Login</h2>
		<form method="post" action="logacc.php">
			<label>Email:</label><br>
			<input type="text" name="uEmail"><br>
			<label>Password:</label><br>
			<input type="password" name="uPass"><br><br>
			<input type="submit" value="Login">
		</form>
		<div class="center">
			<a class="back-button" href="index.php"><i class="fas fa-arrow-left"></i></a>
		</div>
	</div>
</body>
</html>
