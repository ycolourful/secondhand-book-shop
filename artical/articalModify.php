<?php
require_once('connect.php');
$id=$_GET['id'];

$query=mysql_query("select * from artical where id=$id");
$data=mysql_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改文章</title>
	<style type="text/css">
	#div0{
		width: 100%;
		height: 100px;
		background-color: #AEEEEE;
	}
	#div1 a{
		color: #2cf2bd;
	}
	#div1{
		width: 300px;
		height:650px;
		background-color: #227f0a;
		border: none;
		float: left;
		font-weight: bold;
		margin: 0 auto;
		
	}
	#div2{

		color: #2cf2bd;
	}
	#title{
		width: 200px;
		height: 30px;

	}
	#author{
		width: 200px;
		height: 30px;

	}
	

	</style>
</head>
<body >
<div id="div0"></div>
<div id="div1" >
<p><a href="articalAdd.php" >发布文章</a></p>

<p><a href="" >管理文章</a></p>
</div>
<div id="div2">
<form id="form1" method="post" action="articalModifyHand.php">

     <td><input type="hidden" name="id" value="<?php echo $data['id']?>"></td>
	<p><tr><td>标题</td>    <td ><input type="text"  name="title" id="title" value="<?php echo $data['title']?>"></td></tr></p>
	<p><tr><td>作者</td>    <td><input type="text"  name="author" id="author" value="<?php echo $data['author']?>"></td></tr></p>
	<p><tr><td>简介 </td>   <td><textarea  name="description" id="description" cols="90" rows="5" ><?php echo $data['description']?></textarea></td></tr></p>
	<p><tr><td>内容 </td>   <td><textarea  name="content" id="content" cols="90" rows="15" ><?php echo $data['content']?></textarea></td></tr></p>
	<input type="submit" id="button" name="button" value="发布">
</form>
</div>
</body>
</html> 