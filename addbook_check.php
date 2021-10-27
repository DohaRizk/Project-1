<?php
include("header.php");
?>
<?php
mysql_connect('localhost','root','');
mysql_select_db('library');
	$name = $_POST['book_name'];
	$author = $_POST['book_authorName'];
	$desc = $_POST['book_desc'];
	$about_author = $_POST['book_aboutAuthor'];
	$link= $_POST['book_link'];
	$sql = "insert into books (name,author_name,description,about_author,link) values('$name '
		,'$author',
		'$desc',
		'$about_author','$link')
		";
	$res = mysql_query($sql);
	?>
	<div id = "signup_div">
	<?php
	if($res==1)
{
	echo '<p id = "signup_p">The book has been successfully added:D</P>';
	echo'<p id = "signup_p">click <a id = "signup_href"href = "profile.php">here</a> to visit your profile</p>';
	
}
	
	?>
</div>
