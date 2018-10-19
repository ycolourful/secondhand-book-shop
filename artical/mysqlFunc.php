<?php
require_once("config.php");
/*连接数据库*/
function connect(){
	$con=mysql_connect(HOST,USERNAME,PASSWORD) or die("连接数据库失败:".mysql_errno().":".mysql_error()) ;
	mysql_set_charset('utf8');
	mysql_select_db('zy') or die("打开指定数据库失败".mysql_errno().":".mysql_error());
    return $con;
}
/*插入数据库*/

function insert($table,$array){
	$keys=join(",",array_keys($array));
	$vals="'".join("','",array_values($array))."'";
	$sql="insert {$table}($keys) values({$vals})";
	return mysql_insert_id();
}


//更新数据库
function update($table,$array,$where=null){
   foreach ($array as $key => $val) {
   	 if($str==null){
   	 	$sep="";
   	 }else{
   	 	$sep=",";
   	 }
   	 $str.=$sep.$key."='".$val."'";
   	}
    $sql="update {$table} set {$str}".($where==null?null:"where".$where);
    mysql_query($sql);
    return mysql_affected_rows();
   }

   //删除记录
   function delete($table,$where=null){
   	$where=$where==null?null:"where".$where;
   	$sql="delete from {$table}{$where}";
   	mysql_query($sql);
   	return mysql_affected_rows();
   }


   //得到指定一条记录
   function fetchOne($sql,$result_type=MYSQL_ASSOC){
   	 $result=mysql_query($sql);
   	 $row=mysql_fetch_array($result,$result_type);
     return $row;   
   }
   //得到结果集中的所有记录
   function fetchAll($sql,$result_type=MYSQL_ASSOC){
   	$result=mysql_query($sql);
   	while(@$row=mysql_fetch_array($result,$result_type)){
   		$rows[]=$row;
   	}
   	return $rows;
   }

   //得到结果集中的条数
   function getResultNum($sql){
   	$result=mysql_query($sql);
   	return mysql_num_rows($result);
   }

?>