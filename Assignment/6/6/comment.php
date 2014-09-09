<?php
session_start();
ini_set('date.timezone','America/New_York');
if (isset($_POST['comment'])) {
	$db_conn = new mysqli('localhost', 'webUser', 'acm1234', 'webuser');
		if (mysqli_connect_errno()) {
			echo 'Connection failed!'.mysqli_connect_error();
			exit;
		}
	$datetime =  gmdate("Y-m-d H:i:s");
	$username=$_SESSION['valid_user'];
	$comment=$_POST['comment'];

		$query = "INSERT INTO `webuser`.`comment` "
				."(`id`, `username`, `comment`, `datetime`) ";
				$query=$query."VALUES (NULL, '$username', '$comment', '$datetime')";
		$result = $db_conn->query($query);
		
		if ($result) {
			header("Location: index.php");
		}
		else{
		echo "INSERT ERROR";
		}
		}
?>