<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
	$id=$_GET[id];
	
	include "config.inc.php";
	$sql="select * from student where id='$id'";
	$result=mysql_db_query($dbname,$sql);
	
	$record=mysql_fetch_array($result);
		$id_stu=$record[id_stu];
		$username=$record[username];
		$password=$record[password];
		$name=$record[name];
		$gender=$record[gender];
		$id_faculty=$record[id_faculty];
		$gpa=$record[gpa];
?>
<form method="post" action="update.php?id=<?=$id?>">
รหัสนักศึกษา :
<input type="text" name="id_stu" value="<?=$id_stu?>" /><br />
Username :
<input type="text" name="username" value="<?=$username?>" /><br />
Password :
<input type="password" name="password" value="<?=$password?>" /><br />
Confirm Password
<input type="password" name="cfpw" value="<?=$password?>" /><br />
ชื่อ
<input type="text" name="name" value="<?=$name?>" /><br />
เพศ
<select name="gender">
	<?
		if($gender==1){
			echo "<option value='1' selected='selected'>ชาย</option>";
			echo "<option value='2'>หญิง</option>";
		}else{
			echo "<option value='1'>ชาย</option>";
			echo "<option value='2' selected='selected'>หญิง</option>";
		}
	?>
</select><br />
คณะ
<select name="id_faculty">
	<option value="1" <? if($id_faculty==1){ ?>selected="selected"<? } ?>>คณะครุศาสตร์</option>
    <option value="2" <? if($id_faculty==2){ ?>selected="selected"<? } ?>>คณะมนุษยศาสตร์</option>
    <option value="3" <? if($id_faculty==3){ ?>selected="selected"<? } ?>>คณะวิทยาศาสตร์</option>
    <option value="4" <? if($id_faculty==4){ ?>selected="selected"<? } ?>>คณะการจัดการ</option>
</select><br />
เกรด
<input type="text" name="gpa" value="<?=$gpa?>" /><br />
<input type="submit" value="OK" />
</form>
</body>
</html>
