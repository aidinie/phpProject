<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/20
 * Time: 21:06
 */
include "conn.php";
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from tab1 where bid='$id'";

    $query=mysqli_query($link,$sql);
    $arr=mysqli_fetch_array($query);
}

if (isset($_POST['sub'])) {
    $title = $_POST['title'];
    $con = $_POST['con'];
    $hid = $_POST['hid'];
    echo $hid;
    $sql = "update tab1 set title='$title',content='$con' where bid='$hid'";
    echo $sql;
    $query = mysqli_query($link, $sql);
    if ($query) {
       
        echo "<script>location='index.php'</script>";
    } else {
        echo "失败";
    }
}


?>
<meta charset="UTF-8">
<form action="update.php" method="post">
    <input type="hidden" name="hid" value=<?php echo $arr['bid']?>>
    标题： <input type="text" name="title" value=<?php echo $arr['title']?>> <br />
    内容： <textarea name="con" id="" cols="20" rows="10" ><?php echo $arr['content']?></textarea>
    <input type="submit" name="sub" value="修改">
</form>


