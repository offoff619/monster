<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
 crossorigin="anonymous">
<div class="head">

<body>
<?
	include "../../../AppServ/www/workshop/config.inc.php";
	$sql="select * from student";
	$result=mysql_db_query($dbname,$sql);
	$i=1;
?>
				<table class="table table-bordered">
                <thead>
					<tr bgcolor="grey">
						<th scope="col">ลำดับ</th>
						<th scope="col">รหัสนักศึกษา</th>
						<th scope="col">ชื่อผู้ใช้</th>
						<th scope="col">รหัสผ่าน</th>
						<th scope="col">ชื่อ - นามสกุล</th>
						<th scope="col">เพศ</th>
						<th scope="col">คณะ</th>
						<th scope="col">เกรด</th>
						<th scope="col">แก้ไข</th>
						<th scope="col">ลบ</th>
					</tr>
                 </thead>

<?
	while($record=mysql_fetch_array($result))
	{
		$id=$record[id];
		$id_stu=$record[id_stu];
		$username=$record[username];
		$password=$record[password];
		$name=$record[name];
		$gender=$record[gender];
		$id_faculty=$record[id_faculty];
		$gpa=$record[gpa];
?>

		
		<tbody>
		<tr>
						<th scope="row"><? echo"$i"?></th>
						<td><? echo"$id_stu"?></td>
						<td><? echo"$username"?></td>
						<td><? echo"$password"?></td>
						<td><? echo"$name"?></td>
						<td><? echo"$gender"?></td>
						<td><? echo"$id_faculty"?></td>
						<td><? echo"$gpa"?></td>
						<td><a href='edit.php?id=<? echo"$id"?>'<button type="button" class="btn btn-warning">แก้ไข</button></a></td>
						<td><a href='delete.php?id=<? echo"$id"?>'<button type="button" class="btn btn-danger">ลบ</button></a></td>
		</tr>
		</tbody>
					
	<?$i++;
	}?>
	</table>

</body>
</html>
