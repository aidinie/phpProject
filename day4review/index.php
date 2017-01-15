<style>
    *{
        margin: 0;
        padding: 0;
    }
    #div1{
        width: 40%;
        height: 800px;
        background-color: aqua;
        margin-left: 100px;
        margin-top: 50px;
        float: left;
    }
    #div2{
        width: 30%;
        height: 200px;
        background-color: antiquewhite;
        margin-top: 50px;
        margin-right: 100px;
        float: right;
    }
</style>
<a href="add.php">添加文章</a> &nbsp;&nbsp;
<?php
   if (isset($_COOKIE['id'])){
       $id=$_COOKIE['id'];
       $name=$_COOKIE['name'];
       echo "<a href='center.php'>".$name."</a>已登录"."&nbsp;";
       echo "<a href='logout.php?id=$id'>注销</a>";
   }else{
       echo "<a href='login.php'>未登录</a>";

   }
?>
<form action="index.php" method="post">
    <input type="text" name="search">
    <input type="submit" name="sub" value="搜索">
</form>
<div id="div1">
<?php
include 'conn.php';
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from blog,user,catalog where user.uid=blog.uid and blog.cid=catalog.cid and catalog.cid='$id' order by blog.time desc";

}else{
    if (isset($_POST['sub'])){
        $str=$_POST['search'];

        if($str){
            $e="title like '%".$str."%'";
        }else{
            $e=1;
        }
          }
    else{
        $e=1;
    }
    $sql="select * from blog,user where $e and user.uid=blog.uid order by blog.time desc";


}
$query=mysqli_query($link,$sql);
while ($rs=mysqli_fetch_array($query)) {
    ?>
    <h3><a href="all.php?id=<?php echo $rs['wid']?>"><?php echo $rs['title']?></a>|<a href="update.php?id=<?php echo $rs['wid']?>">修改</a>|<a href="del.php?id=<?php echo $rs['wid']?>">删除</a></h3>
    <li>时间:<?php echo $rs['time']?></li>
    <li>作者:<?php echo $rs['uname']?></li>
    <span>内容:<?php echo $rs['content']?></span><br>
    <hr>
    <?php
}
?>
</div>
<div id="div2">
    <a href="index.php">全部</a><br>
    <?php
    $sql="select * from catalog";
    $query=mysqli_query($link,$sql);
    while ($rs=mysqli_fetch_array($query)) {
        ?>
        <a href="index.php?id=<?php echo $rs['cid']?>"><?php echo $rs['cname'];?></a><br>

        <?php
    }
    ?>
</div>


