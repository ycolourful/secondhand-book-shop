<?php
header("content-type:text/html,charset=utf-8");
require_once('connect.php');
require_once('mysqlFunc.php');
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from users where name='{$username}' and password='{$password}'";

$row=fetchOne($sql);
if($row){
	$_SESSION['adminName']=$row['username'];
	$_SESSION['adminId']=$row['Id'];
	echo "<script>alert('登录成功');window.location.href='articalManage.php';</script>";
}else{
	echo "<script>alert('登录失败，请重新登录');window.location.href='login2.html';</script>";
}
?>