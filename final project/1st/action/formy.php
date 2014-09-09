<?php
require '../conn/conn.php';
$password=$_POST['password'];
$email=$_POST['email'];
$realname=$_POST['realname'];

if(!$password){
echo "Nothing to update";
}else{
	$password=md5($password);
	$sql="update forum_user set password='$password'";
}
$result=mysql_query($sql);

?>

<h2>Password change successful</h2>
<p>Go to <a href="../index.php">Home Page</a>