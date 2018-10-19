<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="jquery.min.js"></script>
</head>
<body>
<button id="btn" >发送一个ajax请求</button>
<div id="box"></div>
<script >
    $("#btn").click(function(){
    	$.post('test.php',{'username':'数据库','age':20},function(data){
		$("#box").html(data);
	});
    });
	
</script>
</body>
</html>