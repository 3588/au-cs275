<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cs 275 assignment 1</title>
</head>

<body>
<div style="width:500; margin:0 auto;">The following are all saved survey answers:</div><br/>
<?php
$file="files/data.cache"; 
if (file_exists($file)) {
	$data = file($file);
	$is_new = TRUE;
	$nu = 1;
	foreach ($data as $temp => $key)
    {
		if($key == '00'."\n"){
		$is_new = TRUE;
		$nu = $nu+1;
		echo "<br/><br/>";
		}
		else{			
		if($is_new){
			echo $nu.' '.$key."<br/><br/>";
			$is_new = FALSE;
		}
		else
		{
			echo "&nbsp;&nbsp;&nbsp;".$key."<br/>";
		}
		
		}
}} else {
    echo "Sorry no data";
}
?>
<div style="width:500; margin:0 auto;">
  <input type="button" value="Go Back Home" onclick="document.location.href='welcome.html'"/></div>
</body>
</html>