<?php
if (!isset($_COOKIE['id'])){
    $str=$_SERVER['REQUEST_URI'];
    $arr=explode('/',$str);
    $num=count($arr)-1;
    $uri=$arr["$num"];
    header("location:login.php?uri=$uri");
   
    //echo "<script>location='login.php?uri=$uri'</script>";
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: nad
 * Date: 2017/1/10
 * Time: 12:32
 */
include "conn.php";
if(isset($_POST['sub'])){
    $title=$_POST['title'];
    $cid=$_POST['catalog'];
    $con=$_POST['con'];
    $uid=$_COOKIE['id'];
    $sql="insert into blog(wid,title,content,time,cid,uid) values (null,'$title','$con',now(),'$cid','$uid')";
    $query=mysqli_query($link,$sql);
    if ($query){
        header("location:index.php");
    }else{
        header("location:add.php");
    }
    
}
?>
<meta charset="UTF-8">
<form action="add.php" method="post">
    标题:<input type="text" name="title"> &nbsp;&nbsp;&nbsp;
    <select name="catalog" id="">
        <?php
         $sql="select * from catalog ";
         $query=mysqli_query($link,$sql);
         while ($rs=mysqli_fetch_array($query)){
        ?>
        <option value="<?php echo $rs['cid']?>"><?php echo $rs['cname']?></option>
        <?php
            }
        ?>
    </select></br>
     内容:<textarea name="con"  cols="30" rows="10" ></textarea>
    <input type="submit" name="sub">

</form>
