<!--计算器完整版-->
<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/13
 * Time: 20:49
 */

  if (isset($_GET["sub"])){
      $num1=$_GET['num1'];
      $num2=$_GET['num2'];
      $sum=0;
      $ysf=$_GET['ysf'];
      $message="";
      $s=false;
      $b=0;
      if ( is_numeric($num1) && is_numeric($num2)){
          $s=true;
          if ($num2==0 &&($ysf=='/' || $ysf=='%')){
              $b=1;
              $message="除数不能为零";
          }else {
              switch ($ysf) {
                  case '+':
                      $sum = $num1 + $num2;
                      break;
                  case '-':
                      $sum = $num1 - $num2;
                      break;
                  case '*':
                      $sum = $num1 * $num2;
                      break;
                  case '/':
                      $sum = $num1 / $num2;
                      break;
                  case '%':
                      $sum = $num1 % $num2;
                      break;
              }
          }
          echo $sum;
      }else{
          $message= "输入非法";
      }

  }
?>
<table align="center" border="2">
    <form action="01-test.php" method="get" >
        <tr>
            <td>num1  <input type="text" name="num1" value="<?php echo $num1?>"></td>
            <td><select name="ysf" >
                    <option value="+" <?php if ($ysf=='+') echo "selected"?>>+</option>
                    <option value="-" <?php if ($ysf=='-') echo "selected"?>>-</option>
                    <option value="*" <?php if ($ysf=='*') echo "selected"?>>*</option>
                    <option value="/" <?php if ($ysf=='/') echo "selected"?>>/</option>
                    <option value="%" <?php if ($ysf=='%') echo "selected"?>>%</option>
            </select></td>
            <td>num2 <input type="text" name="num2" value="<?php echo $num2?>"></td>
            <td>=</td>
            <td><input type="submit" name="sub" value="计算"></td>
        </tr>
        <?php
        if (isset($_GET['sub'])){
            echo "<tr>";
            echo "<td colspan='5'>";
            if ($s){
                if ($b==1){
                    echo $message;
                }else {
                    echo $num1 . $ysf . $num2 . '=' . $sum;
                }
            }else{
                echo $message;
            }

            echo "</td>";
            echo "<tr>";
        }
        ?>
    </form>
</table>
