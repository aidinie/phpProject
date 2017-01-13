<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/22
 * Time: 16:16
 */
 include "conn.php";
if (isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="update tab1 set hits=hits+1 where bid='$id'";
    $query=mysqli_query($link,$sql);
    if($query){
        $sql="select * from tab1 where bid='$id'";
        $query=mysqli_query($link,$sql);
        $arr=mysqli_fetch_array($query);
    }else{
        echo "error";
    }
}else{
    echo "error";
}
?>
标题：<li><?php echo $arr['title'];?></li><br/>
时间：<li><?php echo $arr['time'];?></li><br/>
访问量：<li><?php echo $arr['hits'];?></li><br/>
内容：<li><?php echo $arr['content'];?></li><br/>