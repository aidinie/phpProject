<!--输入年份判断是否是闰年-->
<meta charset="UTF-8">
<form action="04-text.php" method="">
    year:<input type="text" name="year" value="1999">
    <input type="submit" name="sub" value="提交">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/5
 * Time: 22:05
 */
if (isset($_GET['sub'])){
    $year=$_GET['year'];
    if ($year%4==0){
        echo "闰年";
    }else{
        echo "平年";
    }
}
