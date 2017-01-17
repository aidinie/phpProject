<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2017/1/11
 * Time: 20:45
 */
include 'conn.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from blog where wid=$id";
    $query=mysqli_query($link,$sql);
    $arr=mysqli_fetch_array($query);

}
if (isset($_POST['sub'])){
    $name=$_POST['title'];
    $con=$_POST['con'];
    $id=$_POST['id'];
    $sql="update blog set title='$name',content='$con' where wid='$id'";
    $query=mysqli_query($link,$sql);
    if($query){
        echo "<script>alert('更新成功')</script>";
        echo "<script>location='index.php'</script>";
    }else{
        echo "<script>alert('更新失败')</script>";
        echo "<script>location='index.php'</script>";
    }
}
?>
<meta charset="UTF-8">
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $arr['wid']?>">
    标题:<input type="text" value="<?php echo $arr['title']?>" name="title"><br>
    内容:<textarea name="con" id="" cols="30" rows="10"><?php echo $arr['content']?></textarea><br>
    <input type="submit" name="sub" value="修改">
</form>
