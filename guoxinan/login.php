<?php
require_once('config.php');
require_once('mysqlFunc.php');
require_once('login.php');
connect();
session_start();
//header("Content-type:text/html;charset=utf-8");

$userId=$_POST['userId'];
$pwd=$_POST['password'];
//自动登录
$autoFlag=$_POST['autoFlag'];

if($userId==''){
	//alertMsg("请输入账号","bootstrap/demo.html");
	echo "<script>alert('请输入账号')</script>";
}
if($pwd==''){
	//alertMsg("请输入密码","bootstrap/demo.html");
	echo "<script>alert('请输入密码')</script>";
}
$sql="select * from users where userId='{$userId}' and password='{$pwd}'";
$row=fetchOne($sql);

if($row){
      if($autoFlag){
      	setcookie("id",$row['id'],time()+7*24*3600);
      	setcookie("userId",$row['userId'],time()+7*24*3600);
      }
	    $_SESSION['userId']=$row['userId'];
	    $_SESSION['id']=$row['id'];
	  alertMsg("登录成功","bootstrap/demo.php");
	   // echo "<script>alert('登录成功')</script>";

}else{
		alertMsg("登录失败，请重新登录","bootstrap/demo.php");
	//echo "<script>alert('登录失败，请重新登录')</script>";
    }



?>
