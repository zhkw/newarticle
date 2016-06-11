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
<td width="213" height="287" align="left" valign="top" bgcolor="#FFFF99">
        <p><a href="article.manage.php">manage article</a></p>
        <p><a href="article.add.php">publish article</a></p></td>
<td width="837" valign="top" bgcolor="#FFFFFF">
<form id="form1" name="form1" method="post" action="article.add.handle.php">
<table width="779" border="0" cellpadding="8" cellspacing="1">
<tr>
	<td colspan="2" align="center">publish article</td>
</tr>
<tr>
	<td width="119">title</td>
	<td width="625"><label for="title"></label>
	 <input type="text" name="title" id="title" /></td>
</tr>
<tr>
	<td width="119"><label for="author">author</label></td>
        <td width="625"><input type="text" name="author" id="author" /></td>
</tr>
<tr>
	<td>description</td>
	<td><label for="description"></label>
	<textarea name="description" id="description" cols="60" rows="5"></textarea></td>
</tr>
<tr>
	<td>content</td>
	<td><textarea name="content" cols="60" rows="15" id="content"></textarea></td>
</tr>
<tr>
	<td colspan="2" aligh="right"><input type="submit" name="button" id="button" value="submit" /></td>
</tr>
    </table>
   </form></td>
 </tr>
 <tr>
 <td height="89" colspan="2" bgcolor="#FFFF99"><strong>copyright</strong></td>
 </tr>

</table>
</body>
</html>
