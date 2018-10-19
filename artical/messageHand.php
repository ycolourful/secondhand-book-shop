<?php
require_once("connect.php");
$message=$_POST['message'];
$getMessage="insert into message(message) values('$message')";
if($query=mysql_query($getMessage)){
	echo "<script>alert('发布成功，感谢您的留言');window.location.href='index2.html';</script>";
}
?>
