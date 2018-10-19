<?php 
header("Content-type:text/html;charset=utf-8");
if($con=mysql_connect('119.23.38.93:63306','zy','zengyuan666')){
	echo "连接成功";

}
else{
	echo "连接失败";
}
if(mysql_select_db('zy')){
	echo "选择数据库成功";

}
else{
	echo "选择数据库失败";
}
if(mysql_query('insert into test(name) values("cat")')){
	echo "插入成功";
}
else{
	 echo mysql_error();
	echo "插入失败";
}
mysql_close($con);

