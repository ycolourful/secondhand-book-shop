<?php
require_once('connect.php');
$title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$content=$_POST['content'];
$id=$_POST['id'];
$updatesql="update artical set title='$title',author='$author',description='$description',content='$content' where id=$id";
if(mysql_query($updatesql)){
	echo "<script>alert('修改成功');window.location.href('articalManage.php');</script>";
}
else{
     echo "<script>alert('修改失败成功');window.location.href('articalModify.php');</script>";
}

?>