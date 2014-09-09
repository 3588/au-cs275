<?php
//SaveItems
define ('FILE_DIR', "files/items.dat");
//print_r($_POST);
/*Id,Title,Description,Price,Comment*/

//if pass error check, email check, number check, save data.
if(check_error($_POST)&&check_Email($_POST['email'])&&is_numeric($_POST['Price']))
save_data($_POST);
else
 echo "<br>we cant save data with error";


/*function for erroe check
check the value in array, it's empty or exist.
*/

function check_Email($mail)
{
	if($mail != '')
	{
		if(preg_match("/^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{2,5}$/", $mail))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}

function check_error($data)
{
	$error = 0;//coutn error time
	foreach($data as $current)
	if(empty($current))//if no value for each key
	{
		$error=$error+1;//add one more error
	}
	if($error!=0)//if there are error
	{
		echo "$error error";
		return false;
	}
	else
		return true;
}
/*function for save_data
create new data and save to file.
one line for each data
*/
function save_data($data)
{
	$new_data="";
	foreach($data as $current)
	$new_data=$new_data.AddSlashes(str_replace("\r\n",'<br>',$current)).'\t';//create new data, add slashes and take care \r\n 
	if (file_exists(FILE_DIR))
    $fp=fopen(FILE_DIR,"a"); //add to the end
	else
    $fp=fopen(FILE_DIR,"w"); //create new one
	fwrite($fp,$new_data."\n");
	fclose($fp);
	echo "this itme is added successfully";
}


?>
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
</div>