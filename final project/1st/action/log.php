<?php 
error_reporting(0); 
require '../conn/conn.php';
$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="select * from forum_user where username='$username' and password='$password'";  //�����˺ż�¼
$result=mysql_query($sql);
$num_rows=mysql_fetch_array($result);
if ($num_rows!=0){                      //�����session��¼�˺��� ���򷵻�
	$_SESSION['username']=$username;
     header("location:../index.php");


}
else {
	session_destroy();
	header("location:../log.php");
}
?>