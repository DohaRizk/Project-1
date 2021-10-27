<html>
<head>
	<title>Library</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
</html>
<?php 
mysql_connect('localhost','root','');
mysql_select_db('library');

?>

<?php 
// collect data 
$name=$_POST['my_name'];
$email=$_POST['my_email'];
$password=$_POST['my_password'];
$date=$_POST['my_date'];
// insert to db 
$sql="insert into users
(name,email,password,dob) 
values
('$name','$email','$password','$date')

";
$res=mysql_query($sql);
?>
<div id = "signup_div">
<?php
if($res==1)
{
	echo '<p id = "signup_p">Thank you for your registration:D</P>';
	echo'<p id = "signup_p">click <a id = "signup_href"href = "profile.php">here</a> to visit your profile</p>';
}

?>
</div>
