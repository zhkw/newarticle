<?php
	require_once('../connect.php');
	$id=$_POST['id'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$updatesql="update article set title='$title',author='$author',description='$description',content='$content' where id='$id'";
	echo $updatesql;
	if(mysql_query($updatesql)){
		echo "<script>alert('update article success!');window.location.href='article.manage.php'</script>";
	}else{
		echo "<script>alert('update article failed!');window.location.href='article.manage.php'</script>";
	}

?>
