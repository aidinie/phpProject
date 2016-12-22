<!--用for，do...while,while 打印九九乘法表-->
<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/5
 * Time: 22:18
 */
//for循环
//for($i=1;$i<10;$i++){
//    for ($j=1;$j<=$i;$j++){
//        echo $i."*".$j."=".$i*$j."&nbsp;";
//
//    }
//    echo "</br>";
//}
////do...while循环
//$i=1;$j=1;
//do{
//    do{
//        echo $i."*".$j."=".$i*$j."&nbsp;";
//        $j++;
//    }while($j<=$i);
//    echo "</br>";
//    $j=1;
//    $i++;
//
//}while($i<=9);
//while
$i=1;$j=1;
while ($i<=9){
    while ($j<=$i){
        echo $i."*".$j."=".$i*$j."&nbsp;";
        $j++;
    }
    echo "</br>";
    $j=1;
    $i++;
}