<?php
require_once('connect.php');

$title=$_POST['title'];
if(!(isset($title)&&!empty($title))){
echo "<script>alert('标题不能为空');window.location.href='articalAdd.php';</script>";
	
}

$author=$_POST['author'];
if(!(isset($author)&&!empty($author))){
	echo "<script>alert('作者不能为空');window.location.href='articalAdd.php';</script>";
}	

$description=$_POST['description'];
if(!(isset($description)&&!empty($description))){
	echo "<script>alert('简介 不能为空');window.location.href='articalAdd.php';</script>";
	
}
$content=$_POST['content'];
if(!(isset($content)&&!empty($content))){
	echo "<script>alert('内容不能为空');window.location.href='articalAdd.php';</script>";
	
}
$datetime=time();
$insertsql="insert into artical(title,author,description,content,datetime) values('$title','$author','$description','$content',$datetime)";


if(mysql_query($insertsql)){
	echo "<script>alert('发布文章成功');window.location.href='articalAdd.php';</script>";
	}
else{
	echo "<script>alert('发布失败，请重新发布');window.location.href='articalAdd.php';</script>";
}
?>