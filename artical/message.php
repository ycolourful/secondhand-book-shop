<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<style type="text/css">
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
    #divtext{
    	padding: 50px 100px 100px 200px;
    }
    #divsubmit{
    	
    	position: absolute;right: 500px;bottom: 180px;
    }
    #btn{
    	background-color:#00868B;
    	width: 80px;
    	height: 30px;
    	color:#F0FFF0;
    	border-radius:20px 5px 20px 5px;
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
   

<div>
	
	<form method="post" action="messageHand.php" id="form">
	   <div id="divtext">
		<textarea cols="90" rows="10" name="message" placeholder="说点什么吧"></textarea>
	   </div>
	   <div id="divsubmit">
	   	  <input type="submit" id="btn" name="btn" value="发布">
	   </div>
	</form>
	</div>
</div>
</body>
</html>