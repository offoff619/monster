<?
	$conn=mysql_connect("localhost","root","12345678");
	if(!$conn){
		echo "Error : DB Failed";
		exit();
	}
	$dbname="clinic";
?>