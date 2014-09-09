<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cs 275 assignment 2 SearchItems</title>
</head>

<body>
<div id="main"  style="width:700px; margin: 0 auto ">
<form action="SearchItems.php" method="post">
title:<input name="title" type="text"><input name="s_title" type="submit"><br/>
price range:<input name="price_min" type="text">-<input name="price_max" type="text"><input name="s_price" type="submit"><br/>
Domain:<input name="domain" type="text"><input name="s_domain" type="submit"><br/>
Description:<input name="keyword" type="text"><input name="s_keyword" type="submit"><br/>
<br/>

</form>
</div>
<div id="table"  style="width:700px; margin: 0 auto ">
<?php
define ('FILE_DIR', "files/items.dat");
if($_POST)
{
?>
<table  border="1">
  <tr>
    <td>ID</td>
    <td>title</td>
    <td>full description</td>
    <td>price</td>
    <td>comment</td>
    <td>photoLink</td>
    <td>User Email</td>
  </tr>
  
  <?php
if (file_exists(FILE_DIR)) {
	if(!empty($_POST["s_title"]))
	search_by_title($_POST["title"]);
	elseif(!empty($_POST["s_price"]))
	search_by_price_range($_POST["price_min"],$_POST["price_max"]);
	elseif(!empty($_POST["s_domain"]))
	search_by_email($_POST["domain"]);
	elseif(!empty($_POST["s_keyword"]))
	search_by_description($_POST["keyword"]);
	elseif(!empty($_POST["s_description"])){}
		
}
	else
	{
echo "<td>NO DATA</td>
    <td>NO DATA</td>
    <td>NO DATA</td>
    <td>NO DATA</td>
    <td>NO DATA</td>
    <td>NO DATA</td>
	<td>NO DATA</td>";
		}

?>

</table>
</div>
<?php
}?>
<div id="two_button" style="text-align:center">
<div id="menu0">
<input type="submit" name="create" id="Enter" value="Welcome Page" onClick="location.href='Welcome.html'"></div>
<div id="menu0">
<input type="submit" name="create" id="Enter" value="Enter an Item" onClick="location.href='EnterItems.html'"></div>
<div id="menu2">
<input type="submit" name="create" id="view" value="View All Items" onClick="location.href='RetreiveItems.php'"></div>
<div id="menu3">
<input type="submit" name="create" id="Search" value="Search Items" onClick="location.href='SearchItems.php'"></div>

</div>
</body>
</html>
<?php
/*Search By Title
 Allow the user to search all stored items by title (complete titles or partial search strings)*/
function search_by_title($title) {
	$file = open_file();
	while (!feof($file)) {
		echo "<tr>";
	$data= fgets($file);//get one line
	$new_data=explode('\t',$data); //split data to array
	$new_data[7]=NULL; //set last one to NULL, useless value. 
	if(strrpos($new_data[1],$title))//search the word
	display($new_data);
	}}
	
	/*Search By Price Range
	Allow the user to search all stored items by price range (min-max)*/
function search_by_price_range($min,$max) {
	$file = open_file();
	while (!feof($file)) {
		echo "<tr>";
	$data= fgets($file);//get one line
	$new_data=explode('\t',$data); //split data to array
	$new_data[7]=NULL; //set last one to NULL, useless value. 
	if($new_data[3]>=$min&&$new_data[3]<=$max)//set the range 
	display($new_data);
	}}
	
	/*Search By Email Domain
	Allow the user to obtain a list of all domains for all stored user emails. A domain for an
email address such as jsmith@ashland.edu is ‘ashland.edu’.
*/
function search_by_email($domain) {
	$file = open_file();
	while (!feof($file)) {
		echo "<tr>";
	$data= fgets($file);//get one line
	$new_data=explode('\t',$data); //split data to array
	$new_data[7]=NULL; //set last one to NULL, useless value. 
	$current_domain=explode('@',$new_data[6]);
	if(strcmp($current_domain[1],$domain)==0)//check the string 
	display($new_data);
	}}

/*Search By Description
 Allow the user to search all stored data by a keyword that occurs in the ‘ full description’
data.
*/
function search_by_description($keyword) {
	$file = open_file();
	while (!feof($file)) {
		echo "<tr>";
	$data= fgets($file);//get one line
	$new_data=explode('\t',$data); //split data to array
	$new_data[7]=NULL; //set last one to NULL, useless value.
	$new_data[4]=dele_bad_words($new_data[4]);//delete bad words
	$keyword_split=explode("<br>",$new_data[2]);//take out <br>
	foreach($keyword_split as $current1)
	{
	 	$keyword_split_space=explode(" ",$current1);// take out space
		if(count($keyword_split_space)!=1)//the line have space
		{
			foreach($keyword_split_space as $current2)
		    if(strcmp($current2,$keyword)==0)//search by the keyword 
	display($new_data);
			}else//the line without space
			{
			if(strcmp($current1,$keyword)==0)//search by the keyword 
	display($new_data);
} 	
	}
	}}
function open_file(){
	$file=FILE_DIR;
if (file_exists($file))
	return $file = fopen($file, "r");
else
	return false;
}
function display($data){
	foreach($data as $current)
	if(!empty($current))
	echo "<td>$current</td>";
	echo "</tr>";
	}
function dele_bad_words($data)
{
$file="files/bad_words.dat";
if (file_exists($file))
foreach(file($file) as $badword)
{
	$badword=trim($badword);
$data=str_ireplace($badword,"*****",$data);
}
return $data;
}
?>