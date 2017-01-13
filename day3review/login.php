
<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/22
 * Time: 20:22
 */
include "conn.php";
if (isset($_POST['sub'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $sql="select * from user where name='$name' and pass='$pass'";
    $query=mysqli_query($link,$sql);
    $arr=mysqli_fetch_array($query);
    if ($arr){
       // echo "ok";
        setcookie("id",$arr['id']);
        setcookie("name",$arr['name']);
        echo "<script>location='index.php'</script>";
    }else{
        echo "error";
    }
}
?>
<meta charset="utf-8">
<form action="login.php" method="post">
    用户名:<input type="text" name="name"><br />
    密码:<input type="password" name="pass"><br />
    <input type="submit" name="sub" value="登陆">
</form>
