<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2017/1/12
 * Time: 15:20
 */
include 'conn.php';
    if (isset($_POST['sub'])) {
        $rid = $_POST['sid'];
        $scon = $_POST['scon'];
        $sid = $_COOKIE['id'];
        $sql = "insert into sx(xid,scon,stime,sid,rid) values (null,'$scon',now(),'$sid','$rid')";
        $query = mysqli_query($link, $sql);
        if ($query) {
             header("location:index.php");
        }
    }

?>
<form action="sx.php" method="post">
    <input type="hidden" name="sid" value="<?php echo $_GET['id']?>">
    <input type="text" name="scon"><br/>
    <input type="submit" name="sub" value="发送">
</form>
