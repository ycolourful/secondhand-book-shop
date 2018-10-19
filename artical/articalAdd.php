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
		
		border: none;
		float: left;
		font-weight: bold;
		margin: 0 auto;
		
	}
	#div2{

		color:	#00EE76;
		font-family:"宋体";
		font-weight: bold;
	}
	#title{
		width: 200px;
		height: 30px;

	}
	#author{
		width: 200px;
		height: 30px;

	}
	#button{
		background-color:#00868B;
    	width: 80px;
    	height: 30px;
    	color:#F0FFF0;
    	border-radius:20px 5px 20px 5px;
	}
	#dsubmit{
		position: absolute;top: 800px; bottom: 20px;right: 300px;
	}
	#title{
		border-radius: 10px 5px 10px 5px;
		background-color: 	#E6E6FA;
	}
	#author{
      border-radius: 10px 5px 10px 5px;
		background-color: 	#E6E6FA;
	}
	#description{
		border-radius: 10px 5px 10px 5px;
		background-color: 	#E6E6FA;
	}
	#content{
		border-radius: 10px 5px 10px 5px;
		background-color: 	#E6E6FA;
	}
	#top{
     width: 100%;
    
     background-color: white;
     border-bottom: 1px solide #bbbbbb; 

   }
   #menu{
     width: 1000px;
     overflow: hidden;
     margin: 0 auto;
   }
   #menu img{
   	height: 90px;
   }
   #menu ul{
   	list-style-type: none;
   }
   #menu ul li{
   	float: left;
   	height: 90px;
   	line-height: 90px;
   	margin-right: 50px;
    }
    #menu ul li a{
    	color: black;
    	text-decoration: none;
    	display: inline-block;
    }
    #menu ul li a:hover{
    	color: #FFD700;
    	text-decoration: none
    }
	

	</style>
</head>
<body bgcolor="#dce8f4">

<div id="top">
	<div id="menu">
		<ul>
		    <li><img src="05.jpg"></li>
			<li><a href="index2.html">首页</a></li>
			<li><a href="#">资料分享</a></li>
			<li><a href="articalAdd.php">心情随笔</a></li>
			<li><a href="#">资源收藏</a></li>
			<li><a href="message.php">欢迎留言</a></li>
      <li><a href="login2.html">登录</a>/<a href="reg2.html">注册</a></li>
      
		</ul>
	</div>
</div>
<div id="div1" >
<p><a href="articalAdd.php" >发布文章</a></p>

<p><a href="articalManage.php" >管理文章</a></p>
</div>
<div id="div2">
<form id="form1" method="post" action="articalAddHand.php">


	<p><tr><td>标题</td>    <td ><input type="text"  name="title" id="title"></td></tr></p>
	<p><tr><td>作者</td>    <td><input type="text"  name="author" id="author"></td></tr></p>
	<p><tr><td>简介 </td>   <td><textarea  name="description" id="description" cols="90" rows="5"></textarea></td></tr></p>
	<p><tr><td>内容 </td>   <td><textarea  name="content" id="content" cols="90" rows="15"></textarea></td></tr></p>
	<div id="dsubmit"><input type="submit" id="button" name="button" value="发布"></div>
</form>
</div>
</body>
</html>