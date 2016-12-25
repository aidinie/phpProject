<!--鼠标滑入整行变黄色，滑出变回原来的颜色-->
<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2016/12/13
 * Time: 21:41
 */
echo '<table width="400" align="center" border="1">';
for ($i=0;$i<100;$i++) {
    if ($i % 2 == 0) {
        $color = "red";
    } else {
        $color = "blue";
    }
    echo "<tr onmouseover=move(this) onmouseout=out(this) bgcolor=" . $color . ">";
    for ($j = 0; $j < 10; $j++) {
        echo "<td>";
        echo $i . '*' . $j . '=' . $i * $j;
        echo "</td>";
    }
    echo '</tr>';
}
?>
<script>
    var ys="";
    function move(obj) {
       ys=obj.bgColor;
        obj.bgColor="yellow";
    }
    function out(obj) {
        obj.bgColor=ys;
    }
</script>

