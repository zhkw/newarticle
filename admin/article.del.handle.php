<?php
	require_once('../connect.php');
	$id=$_GET['id'];
	$deletesql="delete from article where id=$id";
	if(mysql_query($deletesql)){
		echo "<script>alert('delete article success!');window.location.href='article.manage.php'</script>";
	}else{
		echo "<script>alert('delete article failed!');window.location.href='article.manage.php'</script>";
	}

?>
