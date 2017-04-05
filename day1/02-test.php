<?php
	//echo "laoshan loves laoxie";
	//if()
	//var_dump($_GET['year']);
	if(isset($_GET['sub'])){
		$year=$_GET['year'];
		echo $year;
	}
	
	//http ---GET POST PUT DELETE
	//GET ---数据在URL上进行提交 year=1999
	//http://localhost/lstest/day1/02-test.php?year=1999
	//$_GET[]  $_POST[]
?>

<meta charset="UTF-8">
<form action="02-test.php" method="">
	year:<input type="text" name="year" value="1999">
	<input type="submit" name="sub" value="提交">
</form>