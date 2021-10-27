<?php
include("header.php");
?>

<?php
mysql_connect('localhost','root','');
mysql_select_db('library');
//select all books from database
$sql = "select * from books";
$res = mysql_query($sql);
?>
<ul id = "book_name">
<?php
while($row = mysql_fetch_array($res))
{
	//link to books
	?>
<li id = "each_book_name"><a id = "each_book_name" href = "show.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></li><br/>
<?php
}
?>
</ul>
<?php
include('footer.php');
?>
