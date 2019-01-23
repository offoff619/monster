<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
	$id_stu=$_POST[id_stu];
	$username=$_POST[username];
	$password=$_POST[password];
	$cfpw=$_POST[cfpw];
	$name=$_POST[name];
	$gender=$_POST[gender];
	$id_faculty=$_POST[id_faculty];
	$gpa=$_POST[gpa];
	
	if($password!=$cfpw){
		echo "รหัสผ่านไม่ถูกต้อง";
		exit();
	}
	if(!is_numeric($id_stu)){
		echo "รหัสนักศึกษาไม่ถูกต้อง";
		exit();
	}
	
	include "config.inc.php";
	$sql="insert into student values('','$id_stu','$username','$password','$name','$gender','$id_faculty','$gpa')";
	$result=mysql_db_query($dbname,$sql);
	
	if($result){
		echo "บันทึกเรียบร้อย";
	}else{
		echo "ไม่สามารถบันทึกได้";
	}
?>
</body>
</html>
