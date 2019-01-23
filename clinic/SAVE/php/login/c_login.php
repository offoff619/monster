<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
session_start();
if(isset($_REQUEST['Username'])){
//connection
include("Connections/c_log.php");
//รับค่า user & password
$Username = $_REQUEST['Username'];
$Password = $_REQUEST['Password'];
//query 
$sql="SELECT * FROM Employee Where username='".$Username."' and password='".$Password."' ";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1){
$row = mysqli_fetch_array($result);
$_SESSION["UserID"] = $row["username"];//ประกาศตัวแปรUserIDไว้เพื่อส่งค่า
$_SESSION["User"] = $row["firstname"]." ".$row["lastname"];//ประกาศตัวแปรUserไว้เพื่อส่งค่า
$_SESSION["Userlevel"] = $row["member_level"];//ประกาศตัวแปรUserlevelไว้เพื่อส่งค่า
if($_SESSION["Userlevel"]=="a"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
Header("Location: admin_page.php");
}
if ($_SESSION["Userlevel"]=="m"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
Header("Location: user_page.php");
}
}else{
echo "<script>";
echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
echo "window.history.back()";
echo "</script>";
}
}else{
Header("Location: c_form.php"); //user & password incorrect back to login again
}
?>