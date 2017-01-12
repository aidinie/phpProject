<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/16
 * Time: 14:55
 */
include "conn.php";
if (isset($_POST['sub'])){
    $title=$_POST['title'];
    $con=$_POST['con']; 
    $sql="insert into tab1(bid,title,content,time) values (null,'$title','$con',now())";
    //echo $sql;
    $query=mysqli_query($link,$sql);
    if ($query){
       // echo "ok";
       echo "<script>location='index.php'</script>";
    }else{
       //echo "error";
        echo " <script>location='add.php'</script>";
    }
}
?>
<meta charset="UTF-8">
<form action="add.php" method="post">
    标题： <input type="text" name="title"> <br />
    内容： <textarea name="con" id="" cols="20" rows="10"></textarea>
    <input type="submit" name="sub" value="添加">
</form>
