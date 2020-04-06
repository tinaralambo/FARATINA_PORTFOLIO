<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login Page</title>
		<link rel="stylesheet" href="login/style.css">
	</head>
	<body>
		<div id="frm">
			<form action="process.php" method="POST">
				<p>
					<label for="">Username :</label>
					<input type="text" id="user" name="user"/>
				</p>
				<p>
					<label for="">Password :</label>
					<input type="Password" id="pass" name="pass"/>
				</p>
				<p>
					<input type="submit" id="btn" value="login"/>
				</p>
			</form>
		</div>
	</body>
	</html>	