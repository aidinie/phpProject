<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/16
 * Time: 14:39
 */
$link = @mysqli_connect('localhost','root','') or die("数据库连接失败");
@mysqli_select_db($link,'blogg') or die("数据库连接失败");
mysqli_set_charset($link,'UTF8');
?>

