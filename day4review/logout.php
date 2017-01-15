<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2017/1/11
 * Time: 20:38
 */
if(isset($_COOKIE['id'])){
    setcookie("id",null);
    setcookie("name",null);
    echo "<script>location='index.php'</script>";
}
?>