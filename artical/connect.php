<?php

require_once('config.php');
//连接
$con=mysql_connect(HOST,USERNAME,PASSWORD);
mysql_select_db('zy');
//确定字符集
mysql_query('set names utf8');
?>