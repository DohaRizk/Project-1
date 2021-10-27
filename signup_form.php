<html>
<head>
	<title>sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav>
		<ul>
			<li id = "title"><b>Online Books</b></li>
		</ul>	
	</nav>
	<form  id = "signup_form" action = "signup.php" method = "post">
			<input id = "textbox_signup" type = "text" name = "my_name" placeholder ="Enter your name" require><br/><br/>
			<input id = "textbox_signup" type = "email" name = "my_email" placeholder = "Email" required><br/><br/>
		    <input id = "textbox_signup" type = "password" name = "my_password" placeholder = "password"required><br/><br/>
		    <b id = "dob">Birthday:</b><br/><br/><input id = "textbox_signup" type = "date" name = "my_date"required><br/><br/>
		    <input  id = "submit_signup" type = "submit" value = "Sign Up">
	</form>
</body>
</html>