<?php
require_once("config.php");
require_once("mysqlFunc.php");
connect();
?>
<?php
$id=isset($_GET["id"])?$_GET["id"]:1;
$sql="update goods set hits=hits+1 where id=".$id;
mysql_query($sql);
$sql="select * from goods where id=".$id;
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
?>
<div>
	<span><?php echo $row["title"]?></span>
	<hr>
	<image src="<?php echo $row['picurl']?>" width="200px"></image>
	<br>
	数量：-<input type="text" id="buynum" value="1">+
	价格：<i style="color:red"><?php echo $row['salesprice']?></i>
	<input type="hidden" id="id" value="<?php echo $row['id']?>">
    <hr>
    内容：<?php echo $row["content"]?><br>
    <a href="shoppingcart.php?a=buynow" onclick="buynow()">立刻购买</a>   &nbsp &nbsp<a href="shoppingcart.php?a=shoppingcart" onclick="addshoppingcart()">加入购物车</a>

<?php
}
?>
</div>

<script src="../jquery.min.js">
//立即购买
function buynow()
{
	//先添加到购物车在跳转到购买页面
	addshoppingcart("buy");
}
//加入购物车
function addshoppingcart(a){
	$.ajax({
		url:"shoppingcart.php?a=addshoppingcart",
		type:"post";
		data:{'buynum':$("#buynum").val(),'id':$("#id").val()},
		dataType:"html",
		success:function (data){
			if(a=="buynow"){
				location.href="shoppingcart.php?a=buynow";
			}else{
				if(data){
					alert("添加购物车成功！");

				}
			}
		}
	})
}



</script>




