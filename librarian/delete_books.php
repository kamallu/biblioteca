<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("update book set status = 'archivados' where book_id='$id'")or die(mysql_error());
header('location:books.php');
?>