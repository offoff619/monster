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
	$sql="delete from student where id='$id'";
	$result=mysql_db_query($dbname,$sql);
	
	if($result){
		echo "<script type='text/javascript'>
						alert('ลบข้อมูลเรียบร้อย');
						window.location='index.php';
					</script>";
	}else{
		echo "<script type='text/javascript'>
						alert('ไม่สามารถลบข้อมูลได้');
						window.location='index.php';
					</script>";
	}
?>
</body>
</html>
