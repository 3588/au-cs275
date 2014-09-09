<?php
$mysql = mysql_connect("localhost","root","","restaurants"); 
print_r($mysql);
if(!$mysql){
	echo "Connect Error";
	exit;
}


$query_select = "SELECT * FROM restaurants.";
$cuisines="cuisines";
$customers="customers";
$dishes="dishes";
$dish_review="dish_review";
$favorite_cuisines="favorite_cuisines";
$restaurants="restaurants";
$restaurant_dish="restaurant_dish";
$restaurant_review="restaurant_review";
?>
<a href="index.php">Index</a>
<a href="list.php">List</a>
<form action="retrieving.php?table=<?=$restaurants?>" method="post">
Retrieving for name or a part of its name <br/>
Name
<input type="text" name="name" id="name">
<br/>
<input name="" type="submit">
</form>
<?php
//name or a part of its name 
if($_GET["table"]==$restaurants){	
$query = $query_select.$restaurants;
$query =$query ."WHERE  `name` LIKE  '%".$_POST["name"]."%'";
}
?>

<form action="retrieving.php?table=<?=$cuisines?>" method="post">
Retrieving fortype of cuisine<br/>
Name
<input type="text" name="name" id="name">
<br/>
<input name="" type="submit">
</form>
<?php
//type of cuisine
if($_GET["table"]==$cuisines){
$query = $query_select.$cuisines;
$query =$query ."WHERE  `name` LIKE  '%".$_POST["name"]."%'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$query = $query_select.$dishes;
$query =$query ."WHERE  `cuisineID` =  '".$row["cuisineID"]."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$query = $query_select.$restaurant_dish;
$query =$query ."WHERE  `dishid` =  '".$row["dishid"]."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$query = $query_select.$restaurants;
$query =$query ."WHERE  `restaurantid` =  '".$row["restaurantid"]."'";
}
?>
<form action="retrieving.php?table=<?=$dishes?>" method="post">
specific dishes served at a restaurant<br/>
Name
<input type="text" name="name" id="name">
<br/>
<input name="" type="submit">
</form>
<?php
//type of cuisine
if($_GET["table"]==$dishes){
$query = $query_select.$dishes;
$query =$query ."WHERE  `name` LIKE  '%".$_POST["name"]."%'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$query = $query_select.$restaurant_dish;
$query =$query ."WHERE  `dishid` =  '".$row["dishid"]."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$query = $query_select.$restaurants;
$query =$query ."WHERE  `dishid` =  '".$row["restaurantid"]."'";
}
?>

<form action="retrieving.php?table=<?=$restaurant_review?>" method="post">
average visitor rating (rating scale is from 1 (worst) to 10 (best))<br/>
rating
<input type="text" name="rating" id="rating">
<br/>
<input name="" type="submit">
</form>
<?php
//type of cuisine
if($_GET["table"]==$restaurant_review){
$query = "SELECT AVG( rating ) FROM restaurant_review WHERE restaurantid = restaurantid";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$query = $query_select.$restaurants;
$query =$query ."WHERE  `restaurantid` =  '".$row["restaurantid"]."'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
echo $row["name"];
}
else{
$result = mysql_query($query);
$row = mysql_fetch_array($result);
echo $row["name"];
}

?>
