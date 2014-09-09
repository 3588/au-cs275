<?php
	$day = 18; $month = 9; $year = 1972;
	$bdayISO = date(¡°c¡±, mktime(0, 0, 0, $month, $day, $year));

	$db = mysqli_connect('localhost', 'user', 'pass');
	$res = mysqli_query($db, ¡°select datediff(now(), '$bdayISO')¡±);
	$age = mysqli_fetch_array($res);
	echo ¡°Age is ¡°.floor($age[0]/365.25);
	setcookie ("mycookie", "value");
	session_start() 
	$_SESSION['myvar'] = 5;
	unset($_SESSION['myvar']);
	<?php
	session_start();
	$_SESSION['sess_var'] = "Hello world!";

	echo 'The content of $_SESSION[\'sess_var\'] is ' 
	.$_SESSION["sess_var"].<BR>;
?>
?>


<?php
		session_start();
		if (isset($__POST['userid']) && isset($__POST['password'])) {
		// if the user has just tried to log in
		$userid = $__POST['userid'];
		$password = $__POST['password']);

		$db_conn = new mysqli('localhost', 'webauth', 'webauth', 'auth');
		if (mysqli_connect_errno()) {
			echo 'Connection failed!'.mysqli_connect_error();
			exit;
		}
		$query = "select * from auth "
				."where name='$userid' "
				." and pass=password('$password')";
		$result = $db_conn->query($query);
		if ($result->num_rows) {
			// if they are in the database register the user id
			$__SESSION['valid_user'] = $userid;
		}
		$db_conn->close();
}
?>

<html> <body> <h1>Home page</h1>
<?php
if (isset($__SESSION['valid_user'])) {
	echo "You are logged in as:". $__SESSION['valid_user']."<br>";
	echo "<a href=\"logout.php\">Log out</a><br>";
}
else {
	if (isset($userid)) 		// if they've tried and failed to log in
		echo "Could not log you in";
	else  		// they have not tried to log in yet or have logged out
		echo "You are not logged in.<br>";
	// provide form to log in
	echo "<form method=post action=\"authmain.php\">";
	echo "<table>";
	echo "<tr><td>Userid:</td>";   
	echo "<td><input type=text name=userid></td></tr>";
	echo "<tr><td>Password:</td>";
	echo "<td><input type=password name=password></td></tr>";
	echo "<tr><td colspan=2 align=center>";
	echo "<input type=submit value=\"Log in\"></td></tr>";
	echo "</table></form>";
}
?>
<br> <a href="members_only.php">Members section</a>
</body>  </html>

<?php
	session_start();
	echo "<h1>Members only</h1>";
	// check session variable
	if (isset($__SESSION['valid_user'])) {
		echo "<p>You are logged in as ". $__SESSION['valid_user']." </p>";
		echo "<p>Members only content goes here</p>";
	}
	else {
		echo "<p>You are not logged in.</p>";
		echo "<p>Only logged in members may see this page.</p>";
	}
	echo "<a href=\"authmain.php\">Back to main page</a>";
?>


<?php
	session_start();
	echo "<h1>Members only</h1>";
	// check session variable
	if (isset($__SESSION['valid_user'])) {
		echo "<p>You are logged in as ". $__SESSION['valid_user']." </p>";
		echo "<p>Members only content goes here</p>";
	}
	else {
		echo "<p>You are not logged in.</p>";
		echo "<p>Only logged in members may see this page.</p>";
	}
	echo "<a href=\"authmain.php\">Back to main page</a>";
?>
<?php
	session_start();
	$old_user = $__SESSION['valid_user']; // store to test if they *were* logged in
	unset($__SESSION['valid_user']);
	session_destroy();
?>
<html> <body> <h1>Log out</h1>
<?php
	if (!empty($old_user)) {
		echo "Logged out.<br>";
	}
	else {
		// if they weren't logged in but came to this page somehow
		echo "You were not logged in, and so have not been logged out.<br>";
	}
?>
<a href="authmain.php">Back to main page</a>
</body>
</html>
SELECT DATE_FORMAT(date_column, '%m %d %Y')
FROM tablename;
