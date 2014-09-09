<?php	
session_start();
if (isset($_SESSION['valid_user'])){?>
You are logged in as:<?=$_SESSION['valid_user']?> <br/>
<a href="index.php?list=a">List Comments by ascending order</a> |  
<a href="index.php?list=d">List Comments by descending order</a> | 
<a href="index.php?add">Add Comments</a> |
<a href="control.php?logout=ture">Logout</a>
<?php
if(isset($_GET['add'])){
?>
<form method="post" action="comment.php">
  <label for="comment">comment</label><br/>
  <textarea name="comment" id="comment" cols="45" rows="5"></textarea><br/>
   <input name="" type="submit" />
</form>
<?php
}
if(isset($_GET['list'])){
	$url = 'a';
	if(($_GET['list'])=='a') $order = 'ASC';
	if(($_GET['list'])=='d') $order = 'DESC';
	$username = $_SESSION['valid_user'];
	$con = mysql_connect("localhost", "webUser", "acm1234");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  $db_selected = mysql_select_db("webuser",$con);
		$query = "select * from comment "
				."where username='$username' "
				." ORDER BY  `comment`.`datetime` "
				.$order;
				$result = mysql_query($query,$con);
		$url=$_GET['list'];
		echo "<br/>date/time format: <a href=\"index.php?list=$url&format=1\">(Y-M-d H:i:s)</a> | <a href=\"index.php?list=$url&format=2\">(Y-F-d H:i:s)</a> | <a href=\"index.php?list=$url&format=3\">(m-d-y h:i:s A)</a>";
		$format = "Y-m-d H:i:s";
		if(isset($_GET['format'])){
			if(($_GET['format'])=='1') $format = "Y-M-d H:i:s";
			if(($_GET['format'])=='2') $format = "Y-F-d H:i:s";
			if(($_GET['format'])=='3') $format = "m-d-y h:i:s A";
		}
		echo "<hr/>";
		while ($row = mysql_fetch_assoc($result)) { 
       echo "<br/>Name: ".$row['username']."<br/>Comment: ".$row['comment']."<br/>Date Time: ".date($format,strtotime($row['datetime']));
		echo "<hr/><br/>"; 
    } 

}
}
else{
?>
Login
<form action="control.php" method="post">
  <label for="username">username</label>
  <input name="username" type="text" id="username" value="authuser" /><br/>
  <label for="password">password</label>
  <input name="password" type="password" id="password" value="acm12" /><br/>
  <input name="" type="submit" />
</form>
<?php
}?>