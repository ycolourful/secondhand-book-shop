<?php
require_once("config.php");
require_once("mysqlFunc.php");
connect();
$a=isset($_GET["a"])?$_GET["a"]:"";
//添加购物车
if($a=="addshoppingcart"){
    $buynum=$_POST["buynum"];
    $id=$_POST["id"];
//    echo "<script>alert($buynum+$id)</script>";
    if(!empty($_COOKIE["shoppingcart"]))
        $shoppingcart=unserialize($_COOKIE["shoppingcart"]);
    else
        $shoppingcart=array();
    if(isset($id) && isset($buynum)){
        $id=intval($id);
        $buynum=intval($buynum);
        $shoppingcart[]=array($id,$buynum);
    }
    setcookie('shoppingcart',serialize($shoppingcart));//商品属性进行序列化保存到cookie中
    return"true";
}

elseif($a=="buynow") {
    if (!empty($_COOKIE["shoppingcart"])) {
        ?>
        <table width="36%" border="1" cellspacing="0" cellpadding="0">
            <tr bgcolor="#87ceeb">
                <td width="20%">商品ID</td>
                <td width="35%" height="30">商品名称</td>
                <td width="25%">购买数量</td>
                <td width="15%">价格</td>
                <td width="5%">操作</td>
            </tr>
            <tr>
                <td height="50" colspan="4"></td>
            </tr>
            <?php
            $totalprice = "";
            $shoppingcart = unserialize($_COOKIE["shoppingcart"]);
            foreach ($shoppingcart as $key => $value) {
                $keys = array($key);
                ?>
                <tr>
                    <td><?php echo $value[0] ?></td>
                    <td height="30">
                        <?php
                        $sql = "select *from goods where id=" . intval($value[0]);
                        $result = $mysqli->query($sql);
                        $row = $result->fetch_assoc();
                        $totalprice += $row["salesprice"] * $value[1];
                        echo '<a href="goodsshow.php?cid=' . $row['goodstypeid'] . '&id=' . $row['id'] . '" class="title" target="_blank">' . $row['title'] . '</a>';
                        ?>
                    </td>
                    <td><?php echo $value[1] ?></td>
                    <td><?php echo $row["salesprice"] * $value[1] ?></td>
                    <td><a href="" onclick="">取消</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <hr>
        <span style="float: left;width: 250px;height: 150px">
        总价格:<?php echo $totalprice ?><a href="">下一步</a>  <a href="">清空购物车</a>
    </span>
        <?php
    }
}