<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cs 275 assignment 2 RetreiveItems</title>
</head>
<body>
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
define ('FILE_DIR', "files/items.dat");
if (file_exists(FILE_DIR)) {
	$file = fopen(FILE_DIR, "r");
	while (!feof($file)) {
		echo "<tr>";
	$data= fgets($file);
	$new_data=explode('\t',$data);
	$new_data[7]=NULL;
	$new_data[4]=dele_bad_words($new_data[4]);//delete bad words
	foreach($new_data as $current)
	if(!empty($current))
	echo "<td>$current</td>";
	echo "</tr>";}}
	else{
	echo "<td>NO DATA</td>
		<td>NO DATA</td>
		<td>NO DATA</td>
		<td>NO DATA</td>
		<td>NO DATA</td>
		<td>NO DATA</td>
		<td>NO DATA</td>";}
function dele_bad_words($data){
$file="files/bad_words.dat";
if (file_exists($file))
foreach(file($file) as $badword){
	$badword=trim($badword);
$data=str_ireplace($badword,"*****",$data);}
return $data;}
?>
</table>
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