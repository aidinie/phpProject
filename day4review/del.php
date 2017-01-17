<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2017/1/12
 * Time: 9:49
 */
include 'conn.php';
if (isset($_GET['id'])){
    $wid=$_GET['id'];
    $sql="delete from blog where wid='$wid'";
    $query=mysqli_query($link,$sql);
    if($query){
        header("location:index.php");
    }

}
?>