<?php
	echo "<a href='02-test.php?action=add'>执行增加操作</a>";
	echo "<br />";
	echo "<a href='02-test.php?action=del'>执行删除操作</a>";
	echo "<br />";
	echo "<a href='02-test.php?action=search'>执行搜索操作</a>";
	echo "<br />";
	echo "<a href='02-test.php?action=update'>执行更新操作</a>";
	echo "<br />";
	
	switch($_GET['action']){
		case 'add':
			echo "<script>alert('现在实现增加功能')</script>";
			break;
		case 'del':
			echo "<script>alert('现在实现删除功能')</script>";
			break;
		case 'search':
			echo "<script>alert('现在实现搜索功能')</script>";
			break;
		case 'update':
			echo "<script>alert('现在实现修改功能')</script>";
			break;
	}

?>