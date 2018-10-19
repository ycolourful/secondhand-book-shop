<?php
session_start();
//验证是否已经登录
if($_SESSION['adminId']==""){
		echo "<script>alert('请先登录');window.location.href='login2.php';</script>";
		//echo "<script>alert('请先登录');window.location.href='articalAdd.php';</script>";
}
require_once('connect.php');
$sql="select * from artical order by datetime ";
$query=mysql_query($sql);
if($query&&mysql_num_rows($query)){
	while($row=mysql_fetch_assoc($query)){
		$data[]=$row;
	}
}
else{
	$data[]=array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布文章</title>
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
		padding: 0px 0px 0px 50px;
		margin-left: 30px;
		
	}
	#table{
		posistion:relative,left:100px;
		padding: 0px 0px 0px 50px;
		margin-left: 30px;

	}
	#title{
		width: 200px;
		height: 30px;

	}
	#author{
		width: 200px;
		height: 30px;

	}
	#div0 span,#div0 a{
		float: right;
		margin: 20px;
	}
	</style>
</head>
<body >
<div id="div0"> <a href="index2.html">首页</a> <span>欢迎您</span></div>
<div id="div1">
<p><a href="articalAdd.php" >发布文章</a></p>
<p><a href="articalManage.php" >管理文章</a></p>

</div>
<div id="div2">
<br><br>
<table frame="border" rules="all" width="50%" id="table" align="center">
	<tr>
	   <td>编号</td>
	   <td>标题</td>
	   <td>操作</td>
	</tr>

	<?php
	

     if(!empty($data)){
     	foreach ($data as  $value){
     		?>
        <tr>
		  <td>&nbsp;<?php echo $value['id']?></td>
		  <td>&nbsp;<?php echo $value['title']?></td>
		  <td>&nbsp;
           <a href="articalModify.php?id=<?php echo $value['id']?>">修改</a>&nbsp;
           <a href="articalDel.php?id=<?php echo $value['id']?>">删除</a>
		  </td>
       </tr>
       <?php
     	}
     }
     ?>
    
	
</table>

</div>
</body>
</html>