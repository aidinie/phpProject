<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2017/1/11
 * Time: 10:37
 */
include "conn.php";
if(isset($_POST['sub'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $arr = Array('$', '=', '%');
    $flag = true;
    for ($i = 0; $i < strlen($name); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($name[$i] == $arr[$j]) {
                $flag = false;
            }
        }
    }

    if ($flag == false) {
        echo "<script>alert('用户名含有非法字符')</script>";
    } else {
        $sql = "insert into user(uid,uname,pass) values (null,'$name','$pass') ";
        $query = mysqli_query($link, $sql);
        if ($query) {
            echo "<script>location='login.php'</script>";
        }
    }
}

?>
<meta charset="utf-8">
<form action="reg.php" method="post">
    用户名:<input type="text" name="name"><br>
    密码:<input type="password" name="pass" id="pass"><br>
    重复密码:<input type="password" name="pass1" id="pass1"><span id="span"></span><br>

    <input type="submit" value="注册" name="sub"><br>
</form>
<script>
    var oPass=document.getElementById("pass");
    var oPass1=document.getElementById("pass1");
    var oSpan=document.getElementById("span");
    oPass1.onblur=function () {
        if (oPass.value!=oPass1.value) {
            oSpan.innerHTML = "密码不一致";
        } else {
            oSpan.innerHTML=" ";
        }

    }
</script>
