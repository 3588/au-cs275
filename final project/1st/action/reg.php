<?php
error_reporting(E_ALL & ~E_NOTICE);
require '../conn/conn.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$realname=$_POST['realname'];
//判断用户是否存在
$sql="select * from forum_user where username='$username'";
$result=mysql_query($sql);
$num_rows=mysql_fetch_array($result);
if ($num_rows==0){
	
	$sql="insert into forum_user (username,password)
	   values ('$username','$password')";
  $result=mysql_query($sql);
  if ($result){ ?>
  	<h2>Create a user successfully</h2>
  	<p>Go to <a href="log.php">Login</a></p>
  	<?php 
  }	
}else {?><h2>Failed to create a user</h2>
  	<p>Go to <a href="../reg.php">Re-registration</a></p><?php }

?>