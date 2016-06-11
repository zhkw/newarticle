<?php
	require_once('../connect.php');
	//print_r($_POST);
	if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
		echo "<script>alert('title cannot be null!');window.location.href='article.add.php'";
	}
	$title=$_POST['title'];
	$author=$_POST['author'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$insertsql="insert into article(title,author,description,content) values('$title', '$author', '$description', '$content')";
	//echo $insertsql;
	if(mysql_query($insertsql)){
		echo "<script>alert('publish article success!');window.location.href='article.add.php'</script>";
	}else{
		echo "<script>alert('publish article failed!');window.location.href='article.add.php'</script>";
	}

?>
