<!--计算器-->
<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/8
 * Time: 19:43
 */
if (isset($_POST['sub'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $ysf=$_POST['ysf'];
    $sum=0; 


    switch ($ysf){
        case '+': $sum=$num1 + $num2;
            break;
        case '-': $sum=$num1 - $num2;
            break;
        case '*': $sum=$num1 * $num2;
            break;
        case '/': $sum=$num1 / $num2;
            break;
        default:"没有这个运算符";
            break;
    }
}
?>
<html>
<head>
    <title> 计算器</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
   #div1{
       width: 605px;
       height: 100px;
       background-color: aqua;
       margin: 100px auto;
   }
</style>
<body>
<div id="div1">
    <table width="400px" align="center" border="1">
    <form action="03-text.php" method="post">
       <tr>
        <td>num1<input type="text" name="num1" value=<?php if (isset($num1)) echo $num1?>></td>
        <td><select name="ysf">
                <option value="+" <?php if (isset($ysf))if($ysf=='+'){echo 'selected';}?>>+</option>
                <option value="-" <?php  if (isset($ysf))if($ysf=='-'){echo 'selected';}?>>-</option>
                <option value="*" <?php  if (isset($ysf))if($ysf=='*'){echo 'selected';}?>>*</option>
                <option value="/" <?php  if (isset($ysf))if($ysf=='/'){echo 'selected';}?>>/</option>
            </select></td>
        <td>num2<input type="text" name="num2" value=<?php if (isset($num2)) echo $num2?>></td>
        <td>sum<input type="text" name="sum" value=<?php if (isset($sum)) echo $sum?>></td>
        <td><input type="submit" name="sub" value="计算"></td>
      ` </tr>
        <tr>
            <td colspan="5"><?php if (isset($sum)) echo $num1.$ysf.$num2."=".$sum?></td>
        </tr>
    </form>
    </table>
</div>
</body>
</html>
