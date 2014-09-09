<?php
$mysql = mysql_connect("localhost","root","","restaurants"); 
print_r($mysql);
if(!$mysql){
	echo "Connect Error";
	exit;
}


$query_insert = "insert into restaurants.";
$cuisines="cuisines";
$customers="customers";
$dishes="dishes";
$dish_review="dish_review";
$favorite_cuisines="favorite_cuisines";
$restaurants="restaurants";
$restaurant_dish="restaurant_dish";
$restaurant_review="restaurant_review";
if($_GET["table"]==$cuisines){	
$query = $query_insert.$cuisines;
$query =$query ." values(".$_POST['id'].",".$_POST['name'].");";
}
//Table customers
if($_GET["table"]==$customers){	
$query = $query_insert.$customers;
$query =$query ." values(".$_POST['id'].",".$_POST['firstname'].",".$_POST['lastname'].",".$_POST['address'].",".$_POST['city'].");";
}
//Table dishes
if($_GET["table"]==$dishes){	
if(!is_numeric($_POST['cuisineID'])){
echo "Enter Error";
$query = NULL;
}
else{
$query = $query_insert.$dishes;
$query =$query ." values(".$_POST['id'].",".$_POST['name'].",".$_POST['cuisineID'].");";
}}
//Table dish_review
if($_GET["table"]==$dish_review){
if(!is_numeric($_POST['dishid'])||!is_numeric($_POST['customerid'])||!is_numeric($_POST['rating'])){
echo "Enter Error";
$query = NULL;
}
else{
$query = $query_insert.$dish_review;
$query =$query ." values(".$_POST['id'].",".$_POST['dishid'].",".$_POST['customerid'].",".$_POST['rating'].",".$_POST['review'].");";
}}
//table favorite_cuisines
if($_GET["table"]==$favorite_cuisines){
if(!is_numeric($_POST['cuisineid'])){
echo "Enter Error";
$query = NULL;
}
else{	
$query = $query_insert.$favorite_cuisines
;
$query =$query ." values(".$_POST['id'].",".$_POST['cuisineid'].");";}
//table restaurants
if($_GET["table"]==$restaurants){	
$query = $query_insert.$restaurants;
$query =$query ." values(".$_POST['id'].",".$_POST['name'].",".$_POST['address'].",".$_POST['city'].");";
}}
//Table restaurant_dish
if($_GET["table"]==$restaurant_dish){
	if(!is_numeric($_POST['dishid'])){
echo "Enter Error";
$query = NULL;
}
else{	
$query = $query_insert.$restaurant_dish;
$query =$query ." values(".$_POST['id'].",".$_POST['dishid'].",".$_POST['price'].");";
}}
//Table restaurant_review
if($_GET["table"]==$restaurant_review){	
if(!is_numeric($_POST['customerid'])||!is_numeric($_POST['rating'])){
echo "Enter Error";
$query = NULL;
}
else{	
$query = $query_insert.$restaurant_review;
$query =$query ." values(".$_POST['id'].",".$_POST['customerid'].",".$_POST['rating'].",".$_POST['review'].");";
}}
if($query!=NULL){
if (!mysql_query($query,$mysql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cs275 - 5</title>
</head>
<body>
<a href="retrieving.php">retrieving</a>
<a href="list.php">list</a>
<form action="index.php?table=<?=$cuisines?>" method="post">
Input for Table <?=$cuisines?><br/>
<label for="id">id</label>
<input type="text" name="id" id="id">
<br/>
<label for="name">Name</label>
<input type="text" name="name" id="name">
<br/>
<input name="" type="submit">
</form>
<form action="index.php?table=<?=$customers?>" method="post">
Input for Table <?=$customers?><br/>
<label for="id">id</label>
<input type="text" name="id" id="id">
<br/>
<label for="firstname">First Name</label><input type="text" name="firstname" id="firstname">
<br/>
<label for="lastname">Last Name</label><input type="text" name="lastname" id="lastname">
<br/>
<label for="address">Address</label><input type="text" name="address" id="address">
<br/>
<label for="city">City</label><input type="text" name="city" id="city">
<br/>
<input name="" type="submit">
</form>
<form action="index.php?table=<?=$dishes?>" method="post" enctype="multipart/form-data">
Input for Table <?=$dishes?><br/>
<label for="id">id</label>
<input type="text" name="id" id="id">
<br/>
<label for="name">Name</label><input type="text" name="name" id="name">
<br/>
<label for="CuisineID">CuisineID</label><input name="cuisineID" type="text" id="cuisineID">
<br/>
<input name="" type="submit">
</form>
<form action="index.php?table=<?=$dish_review?>" method="post">
Input for Table <?=$dish_review?><br/>
<label for="id">id</label>
<input type="text" name="id" id="id">
<br/>
<label for="dishid">Dish ID</label><input type="text" name="dishid" id="dishid">
<br/>
<label for="customerid">Customer ID</label><input type="text" name="customerid" id="customerid">
<br/>
<label for="rating">Rating</label><input type="text" name="rating" id="rating">
<br/>
<label for="review">Review</label><input type="text" name="review" id="review">
<br/>
<input name="" type="submit">
</form>
<form action="index.php?table=<?=$favorite_cuisines?>" method="post">
Input for Table <?=$favorite_cuisines?><br/>
<label for="id">id</label>
<input type="text" name="id" id="id">
<br/>
<label for="cuisineID">CuisineID</label><input type="text" name="cuisineid" id="cuisineid">
<br/>
<input name="" type="submit">
</form>
<form action="index.php?table=<?=$restaurants?>" method="post">
Input for Table <?=$restaurants?><br/>
<label for="id">id</label>
<input type="text" name="id" id="id">
<br/>
<label for="name">Name</label><input type="text" name="customerid" id="customerid">
<br/>
<label for="address">Address</label><input type="text" name="address" id="rating">
<br/>
<label for="city">City</label><input type="text" name="city" id="city">
<br/>
<input name="" type="submit">
</form>
<form action="index.php?table=<?=$restaurant_dish?>" method="post">
Input for Table <?=$restaurant_dish?><br/>
<label for="id">id</label>
<input type="text" name="id" id="id">
<br/>
<label for="dishid">dishid</label><input type="text" name="dishid" id="dishid">
<br/>
<label for="price">price</label><input type="text" name="price" id="price">
<br/>
<input name="" type="submit">
</form>
<form action="index.php?table=<?=$restaurant_review?>" method="post">
Input for Table <?=$restaurant_review?><br/>
<label for="id">id</label>
<input type="text" name="id" id="id">
<br/>
<label for="customerid">customerid</label><input type="text" name="customerid" id="customerid">
<br/>
<label for="rating">rating</label><input type="text" name="rating" id="rating">
<br/>
<label for="rating">rating</label><input type="text" name="rating" id="rating">
<br/>
<input name="" type="submit">
</form>
</body>
</html>

