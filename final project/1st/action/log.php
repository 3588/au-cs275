<?php 
error_reporting(0); 
require '../conn/conn.php';
$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="select * from forum_user where username='$username' and password='$password'";  //查找账号记录
$result=mysql_query($sql);
$num_rows=mysql_fetch_array($result);
if ($num_rows!=0){                      //如果有session记录账号名 否则返回
	$_SESSION['username']=$username;
     header("location:../index.php");


}
else {
	session_destroy();
	header("location:../log.php");
}
?>