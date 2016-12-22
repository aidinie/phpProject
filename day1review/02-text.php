<!--打印九九乘法表放置在表格中，并完成四种形态。-->
<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/8
 * Time: 19:21
 */
//第一种乘法表
//echo "<table width=1000 align='center' border='1'>";
//for($i=1;$i<=9;$i++){
//
//
//    for($j=1;$j<=$i;$j++){
//        echo "<td>";
//        echo $i." * ".$j." = ".($i*$j)."&nbsp;";
//        echo "</td>";
//    }
//    echo "</tr>";
//}
//echo "<table>";
//第二种乘法表
//echo "<table width=1000 align='center' border='1'>";
    //for ($i=9;$i>0;$i--){
    //    for ($j=1;$j<=$i;$j++){
    //
    //        echo "<td>";
        //        echo $i."*".$j."=".$i*$j;
        //        echo "</td>";
    //    }
    //    echo "</tr>";
    //}
    //echo "<table>";
////第三种
//echo "<table width=1000 align='center' border='1'>";
//for ($i=9;$i>0;$i--){
//    for($k=1;$k<10-$i;$k++){
//        echo "<td>";
//        echo " ";
//        echo "</td>";
//    }
//    for ($j=1;$j<=$i;$j++){
//
//        echo "<td>";
//        echo $i."*".$j."=".$i*$j;
//        echo "</td>";
//    }
//    echo "</tr>";
//}
//echo "<table>";
//第四种
echo "<table width=1000 align='center' border='1'>";
for($i=1;$i<=9;$i++){
    if ($i%2==0){
        $color="red";
    }else{
        $color="blue";
    }
    echo "<tr bgcolor='$color'>";
    for($k=1;$k<10-$i;$k++){
        echo "<td>";
        echo " ";
        echo "</td>";
    }

    for($j=1;$j<=$i;$j++){
        echo "<td>";
        echo $i." * ".$j." = ".($i*$j)."&nbsp;";
        echo "</td>";
    }
    echo "</tr>";
}
echo "<table>";



?>

<meta charset="utf-8">