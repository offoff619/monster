<?php
	session_start();
	mysql_connect("localhost","root","12345678");
	mysql_select_db("clinic");
	$strSQL = "SELECT * FROM employee WHERE Username = '".mysql_real_escape_string($_POST['username'])."' 
	and Password = '".mysql_real_escape_string($_POST['password'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["id"] = $objResult["id"];
			$_SESSION["level"] = $objResult["level"];

			session_write_close();
			
			if($objResult["Status"] == "1")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:http://localhost/clinic/index.html");
			}
	}
	mysql_close();
?>