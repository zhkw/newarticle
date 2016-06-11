<?php
	require_once('config.php');
	$con=mysql_connect(HOST,USERNAME,PASSWORD);
	if(!mysql_select_db('info')){
		echo mysql_error();
	}
	mysql_query('set names utf8');
?>
