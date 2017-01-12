<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/20
 * Time: 20:40
 */
include "conn.php";
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="delete from tab1 where bid='$id'";
    $query=mysqli_query($link,$sql);
    if ($query){
        echo "<script>location='index.php'</script>";
    }else{
        echo "删除失败";
    }
}
?>