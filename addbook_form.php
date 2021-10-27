<?php
include('header.php');
?>
<html>
<head>
	<title>Add Book</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form  id = "addBook_form" action = "addbook_check.php" method = "post">
			<h2 id = "addBook_title">Add Book</h2><hr/>
			Book name:<br/><input id = "textbox_addBook" type = "text" name = "book_name"  required><br/><br/>
			Author name:<br/><input id = "textbox_addBook" type = "text" name = "book_authorName" required><br/><br/>
		    Description:<br/><textarea id = "textbox_addBook" rows = "15" cols = "55"name = "book_desc" required></textarea><br/><br/>
		    About author:<br/><textarea id = "textbox_addBook" rows = "15" cols = "55"name = "book_aboutAuthor" ></textarea><br/><br/>
		    Link to download:<br/><input id = "textbox_addBook" type = "text" name = "book_link" required><br/><br/>
		    <input  id = "submit_addBook" type = "submit" value = "Add book">
	</form>
	<br/>
</body>
</html>
<?php
include('footer.php');
?>