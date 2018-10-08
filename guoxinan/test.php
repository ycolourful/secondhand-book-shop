<?php
require_once('mysqlFunc.php');
$sql=insert(users,({name:'a',password:123}));
$query=mysql_query($sql);
if($query){
	echo "插入数据成功";
}
?>