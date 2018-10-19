<?php
require_once('connect.php');
$id=$_GET['id'];
$delmysql="delete from artical where id=$id";
if(mysql_query($delmysql)){
	echo "<script>alert('删除文章成功')</script>";
}
else{
	echo "<script>alert('删除文章失败')</script>";
}
?>