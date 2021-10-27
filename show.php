<?php
include("header.php");
?>
<?php
mysql_connect('localhost','root','');
mysql_select_db('library');
$id = $_GET["id"];
$sql = "select * from books where id = '$id'";
$res = mysql_query($sql);
?>
<div id = "book_inf">
<?php
while($row = mysql_fetch_array($res))
{
	//echo"<div id = 'book'>";
	//echo "<p><b>".$row['name']."</b></p>";
	//echo "</div>";
	echo"<h1 id = 'book_name'>". $row['name']."</h1><br/>";
	echo "<h2 id = 'book'> by: ".$row['author_name']."</h2><br/><hr/>";
	echo "<h3 id = 'book'>Book Description:</h3><hr/>";
	echo "<p id = 'boook_p'>".$row['description']."</p><br/><hr/>";
	echo "<h3 id = 'book'>About Author:</h3><hr/>";
	echo "<p id = 'boook_p'>".$row['about_author']."</P><br/><hr/>"
	?>
	<h3 id ='book'>Download from <a  id = "link_download_book"href = "<?php echo $row['link'];?>">here</a></h3><br/>
<?php
}
?>
</div>
<?php
include('footer.php');
?>