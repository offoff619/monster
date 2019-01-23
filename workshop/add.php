<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="save.php">
รหัสนักศึกษา :
<input type="text" name="id_stu" /><br />
Username :
<input type="text" name="username" /><br />
Password :
<input type="password" name="password" /><br />
Confirm Password
<input type="password" name="cfpw" /><br />
ชื่อ
<input type="text" name="name" /><br />
เพศ
<select name="gender">
	<option value="1">ชาย</option>
    <option value="2">หญิง</option>
</select><br />
คณะ
<select name="id_faculty">
	<option value="1">คณะครุศาสตร์</option>
    <option value="2">คณะมนุษยศาสตร์</option>
    <option value="3">คณะวิทยาศาสตร์</option>
    <option value="4">คณะการจัดการ</option>
</select><br />
เกรด
<input type="text" name="gpa" /><br />
<input type="submit" value="OK" />
</form>
</body>
</html>
