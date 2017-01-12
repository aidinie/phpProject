<a href="add.php"> 添加文章</a> &nbsp; &nbsp;
<?php
 if(isset($_COOKIE['id'])){
     $name=$_COOKIE['name'];
     $id=$_COOKIE['id'];
     
     echo $name."已登陆"."&nbsp";
     echo "<a href='unlogin.php?id='".$id.">注销</a>";
 }else{
     echo "<a href='login.php'>未登录</a>";
 }
?>
<br/>
<form action="index.php" method="get">
<input type="text" name="search">
<input type="submit" name="sub" value="搜索"><br />
</form>
<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/20
 * Time: 19:53
 */
  include "conn.php";
if (isset($_GET['sub'])){
  $s=$_GET['search'];
  $w="title like '%".$s."%'";
    
}else{
    $w=1;
}

 $sql="select * from tab1 where $w order by bid desc";
 $query=mysqli_query($link,$sql);
 //$arr=mysqli_fetch_array($query);
while ($arr=mysqli_fetch_array($query)){
    ?>
    标题:<a href="edit.php?id=<?php echo $arr['bid']?>"><span><?php echo $arr['title']; ?></span></a> | <a href="update.php?id=<?php echo $arr['bid']?>">修改</a> | <a href="del.php?id=<?php echo $arr['bid']?>">删除</a> <br/>
    内容:<span><?php echo iconv_substr($arr['content'],0,2); ?>...</span> <br/>
    时间:<span><?php echo $arr['time']; ?></span> <br/>
    <hr>
  <?php

}

?>