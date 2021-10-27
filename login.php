<?php
include('header.php');
?>
<?php 
mysql_connect('localhost','root','');
mysql_select_db('library');
// collect data from the Form
$email=$_POST['my_email'];
$password=$_POST['my_password'];

// check if exists 
$sql="select * from users where email='$email' and password='$password'";
$res=mysql_query($sql);

if(mysql_num_rows($res)>0)
{
	
	$_SESSION['logged']=1;
	while($row=mysql_fetch_array($res))
	{
		$_SESSION['email']=$row['email'];
		$_SESSION['name']=$row['name'];
		
	}
	// goto profile
	header('Location: header.php');
	
	
}
else
{
// show error message 
echo 'email or password is wrong .. please <a href="header.php">try</a> again ';
	
}

?>

