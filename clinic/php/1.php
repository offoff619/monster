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
<html>
<strong><font face="Sarabun">
<?
	include "config.inc.php";
	$sql="select * from employee";
	$result=mysql_db_query($dbname,$sql);
	$i=1;
?>
				<table class="table table-bordered">
                <thead>
					<tr bgcolor="#BFEFFF">
						<th scope="col">ลำดับ</th>
						<th scope="col">ชื่อ</th>
						<th scope="col">นามสกุล</th>
						<th scope="col">เพศ</th>
						<th scope="col">ตำแหน่ง</th>
						<th scope="col">ที่อยู่</th>
						<th scope="col">ชื่อผู้ใช้</th>
						<th scope="col">สิทธิ์เข้าถึงระบบ</th>
                        <th scope="col">แก้ไข</th>
                        <th scope="col">ลบ</th>
					</tr>
                 </thead>

<?
	while($record=mysql_fetch_array($result))
	{
		$id=$record[id];
		$name=$record[name];
		$lastname=$record[lastname];
		$gender=$record[gender];
		$position=$record[position];
		$address=$record[address];
		$username=$record[username];
		$password=$record[password];
		$password=$record[password];
		$level=$record[level];
?>

		
		<tbody>
		<tr bgcolor="#F0FFFF">
						<th scope="row"><? echo"$i"?></th>
						<td><? echo"$name"?></td>
						<td><? echo"$lastname"?></td>
						<td><? if ($gender==1){
							echo "ชาย";
						}else{
							echo "หญิง";
						}?></td>
						<td><? echo"$position"?></td>
						<td><? echo"$address"?></td>
						<td><? echo"$username"?></td>
                        <td><? if ($level==1){
							echo "ผู้ดูแลระบบ";
						}else{
							echo "สมาชิก";
						}?></td>
                        
						<td width="50"><a href='edit.php?id=<? echo"$id"?>'<button type="button" class="btn btn-warning">แก้ไข</button></a></td>
						<td width="50"><a href='delete.php?id=<? echo"$id"?>'<button type="button" class="btn btn-danger">ลบ</button></a></td>
		</tr>
		</tbody>
					
	<?$i++;
	}?>
	</table>
</a>
</font>
</stong>

</body>
</html>
