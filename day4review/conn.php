<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2017/1/10
 * Time: 11:27
 */
$link = @mysqli_connect('localhost','root','') or die('打开数据库失败');
@mysqli_select_db($link,'blog6') or die("数据库连接失败");
mysqli_set_charset($link,'UTF8');

?>