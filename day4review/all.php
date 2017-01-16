<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2017/1/12
 * Time: 10:43
 */
include 'conn.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $uid=$_COOKIE['id'];
    $uname=$_COOKIE['name'];
    $sql="update blog set hits=hits+1 where wid=$id";
    $query=mysqli_query($link,$sql);

    $sql="select * from user,blog where wid=$id and user.uid=blog.uid";
    $query=mysqli_query($link,$sql);
}
while ($arr=mysqli_fetch_array($query)) {

    ?>
    <h3><a href=""><?php echo $uname?></a>已登录<a href="sx.php?id=<?php echo $arr['uid']?>">发送私信</a></h3>
    <h3>标题:<?php echo $arr['title']?></h3>
     内容:<textarea name="" id="" cols="30" rows="10"><?php echo $arr['content']?></textarea>
    <p>访问量:<?php echo $arr['hits']?></p>
    <?php
}
?>
<form action="all.php" method="get">
    <input type="hidden" name="id" value="<?php echo $id?>">
    <textarea name="pcon" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="sub" value="评论">
</form>
<?php
if (isset($_GET['sub'])){
    $pcon=$_GET['pcon'];
    $wid=$_GET['id'];
    $uid=$_COOKIE['id'];
    $sql="insert into pl(pid,pcon,ptime,wid,uid) values (null,'$pcon',now(),'$wid','$uid')";

    $query=mysqli_query($link,$sql);
    if ($query){
        header("location:all.php?id=$wid");
    }
}
?>
<?php
if(isset($_GET['id'])){
    $wid=$_GET['id'];
    $sql="select * from pl,user where wid=$wid and pl.uid=user.uid";
    $query=mysqli_query($link,$sql);

}
while ($arr=mysqli_fetch_array($query)) {

    ?>
    <p>内容: <?php echo  $arr['pcon']?></p>
    <p>评论人: <?php echo  $arr['uname']?></p>
    <?php
}
?>


