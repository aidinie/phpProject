<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2017/1/11
 * Time: 22:25
 */
include 'conn.php';
if(isset($_GET['p'])){
    $page=$_GET['p'];
}else{
    $page=1;
}

$pagesize=10;
$pp=($page-1)*$pagesize;
$sql="select count(*) as allnum from fy";
$query=mysqli_query($link,$sql);
$rs=mysqli_fetch_array($query);
$lastpage=ceil($rs[allnum]/$pagesize);
$sql="select * from fy limit $pp,$pagesize";

$query=mysqli_query($link,$sql);
echo "<table align='center' width='500' border=1 cellspacing=0>";
while ($rs=mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td><?php echo $rs['fid']?></td>
        <td><?php echo $rs['fname']?></td>
    </tr>
    <?php
}
echo "<tr>";

echo "<td colspan='2'>";
echo "<a href='?p=1'>首页</a>";
echo "<a href='?p=".(($page>1)?$page-1:1)."'>上一页</a>";
echo "<a href='?p=".(($page>=$lastpage)?$lastpage:$page+1)."'>下一页</a>";
echo "<a href='?p=$lastpage'>末页</a>";
echo "</td>";
echo "</tr>";
echo "</table>";
?>
