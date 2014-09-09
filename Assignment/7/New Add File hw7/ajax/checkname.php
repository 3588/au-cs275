<?php
require("../conn.php");
	$username=$_GET["username"];
	$sql="select * from user where username='$username'";
	$result=mysql_query($sql);
	if(is_array(mysql_fetch_array($result))){
		echo "<font color=red>Username in database</font>";
	}else{
		echo "<font color=green>Username not in database</font>";
	}
?>