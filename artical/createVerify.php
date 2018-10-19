<?php
//通过GD库产生验证码
//创建画布
$width=80;
$height=20;
$image=imagecreatetruecolor($width, $height);
$white=imagecolorallocate($image, 255, 255, 255);
$black=imagecolorallocate($image, 0, 0, 0);
//用填充矩形填充画布
imagefilledrectangle($image, 1, 1, $width-2, $height-2,$white);
//产生验证码
function buildRandomString($type=1,$length=4){
	if($type==1){
		$chars=join("",range(0, 9));
	}elseif($type==2){
		$chars=join("",array_merge(range("A", "Z"),range("a", "z")));
	}elseif($type==3){
		$chars=join("",array_merge(range(0, 9),range("A", "z"),range("a", "z")));
	}
	$length=4;
	if($length>strlen($chars)){
		exit("字符串长度不够");
	}
	$chars=str_shuffle($chars);
	return substr($chars, 0,$length);
}
$chars=buildRandomString($type=1,$length=4);
$sess_name="verify";
$_SESSION[$sess_name]=$chars;
for($i=0;$i<$length;$i++){
	$size=mt_rand(14,18);
	$angle=mt_rand(-15,15);
	$x=5+$i*$size;
	$y=mt_rand(20,26);
	$text=substr($chars, $i,1);
	$fontfile="";
	$color=imagecolorallocate($image, mt_rand(50,90), mt_rand(80,200), mt_rand(60,200));
	imagettftext($image, $size, $angle,$x, $color, $fontfile, $text);
	
}


?>