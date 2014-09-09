<?php
session_start();
if(isset($_GET['logout'])){
		unset($_SESSION['valid_user']);
	}
else{
	if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
$db_conn = new mysqli('localhost', 'webUser', 'acm1234', 'webuser');
		if (mysqli_connect_errno()) {
			echo 'Connection failed!'.mysqli_connect_error();
			exit;
		}
		$query = "select * from auth "
				."where username='$username' "
				." and password='$password'";
		$result = $db_conn->query($query);
	
		if ($result->num_rows) {
			$_SESSION['valid_user'] = $username;
		}
		else{
		$_SESSION['valid_user']=NULL;
		}
		$db_conn->close();
		print_r($_SESSION['valid_user']);
	}
}
	header("Location: index.php"); 
?>