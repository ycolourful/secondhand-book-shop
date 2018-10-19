
<?php
header("Content-type:text/html;charset=utf-8");
require_once("config.php");
require_once("mysqlFunc.php");
connect();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div style='width:800px;float:none'>
    <h1>商品列表</h1>
    <!--    显示当前系统时间-->
    <h3><p id="demo"></p>
        <script>
            var myVar=setInterval(function(){myTimer()},1000);
            function myTimer() {
                var d = new Date();
                document.getElementById("demo").innerHTML = d.toLocaleTimeString();
            }
        </script>
    </h3>
    <form method="get" action="goods.php">
    <table style="100%" border="1">
        <tr>
            <td>
                <select name="gid">
                    <option value="0">请选择商品</option>
<?php
function show($fid,$i)
{
    global $mysqli;
    $sql = "select *from goodstype where fid=$fid";
    $result = mysql_query($sql);
    $str=" ";
   
    for($n=1;$n<$i;$n++) {
        $str .= "---";
    }
    $id=$_GET["gid"];
    ?>
    <?php
    while ($row = mysql_fetch_assoc($result)) {
        ?>
        <option <?php if($id==$row['id']){echo "selected";}?> id="<?php echo $str.$row['classname'] ?>" value="<?php echo $row['id'] ?>">
            <?php echo $str.$row["classname"] ?>
        </option>
        <?php
        show($fid=$row["id"],$i);
        ?>
        <?php
    }
}
show(0,2);
    ?>
     <input id="select" type="submit" value="查询"></select></td></tr>
    </table>
    </form>
</div>



<div style="float: none;width: 600px">
<?php
    $id=isset($_GET["gid"])?$_GET["gid"]:"";
    if(!empty($id)){
        $sql="select *from goods where goodstypefid=$id or goodstypefstr like '%$id%' and checkinfo=1 and delstate=0";
    }else{
        $sql="select *from goods";
    }
    $result=mysql_query($sql);
    ?>
<table border="1" cellpadding="3" cellspacing="0" width="60%">
    <tr bgcolor="skyblue">
<?php
  while($row=mysql_fetch_assoc($result)){
?>
<td >
    <image width="200px" height="200px" src="<?php echo $row["picurl"]?>"></image>
    <a title="查看商品详细信息" href="goodsshow.php?id=<?php echo $row["id"]?>"><?php echo $row["title"]?></a>
</td>
<?php
  }
      ?>
    </tr>
</table>
</div>

</body>
</html>








