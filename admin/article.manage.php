<?php
	require_once('../connect.php');
	$sql="select * from article order by id desc";
	$query=mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row=mysql_fetch_assoc($query)){
			$data[]=$row;
		}
	}else{
		$data=array();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>no title</title>
<style type="text/css">
body{
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
</head>

<body>
<table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" 
bgcolor="#000000">
<tr>
	<td height="89" colspan="2" bgcolor="#FFFF99"><strong>admin manage system</strong></td>
</tr>
<tr>
<td width="156" height="287" align="left" valign="top" bgcolor="#FFFF99">
	<p><a href="article.manage.php">manage article</a></p>    
	<p><a href="article.add.php">publish article</a></p></td>
<td width="837" valign="top" bgcolor="#FFFFFF">
<table width="743" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
<tr>
	<td colspan="3" align="center" bgcolor="#FFFFFF">article list manage </td>
</tr>
<tr>
	<td width="37" bgcolor="#FFFFFF">id</td>
	<td width="572" bgcolor="#FFFFFF">title</td>
	<td width="122" bgcolor="#FFFFFF">operate</td>
</tr>
<?php
	if(!empty($data)){
		foreach($data as $value){
?>
<tr>
	<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
	<td bgcolor="#FFFFFF">&nbsp;<?php echo $value['title']?></td>
	<td bgcolor="#FFFFFF"><a href="article.del.handle.php?id=<?php echo $value['id']?>">delete</a> <a href="article.modify.php?id=<?php echo $value['id']?>">modify</a></td>
</tr>
<?php
		}
	}
?>
    </table>
 </td>
 </tr>
 <tr>
 <td height="89" colspan="2" bgcolor="#FFFF99"><strong>copyright</strong></td>
 </tr>

	</table>
	</body>
</html>
