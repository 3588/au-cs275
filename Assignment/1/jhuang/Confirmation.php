<?php
//print_r($_POST);
$file="files/data.cache"; 
if (file_exists($file)) {
    $fp=fopen($file,"a");
} else {
    $fp=fopen($file,"w");
}
$nu=$_POST['nu'];
$arr_data = array($_POST['name'].' (age '.$_POST['age'].').');
for($i=1;$i<=$nu;$i++){
	$question_name = 'Question'.$i;
	$arr_data[]='Q'.$i.': '.$_POST[$question_name];
}

foreach($arr_data as $key)
fwrite($fp,$key."\n");
fwrite($fp,'00'."\n");
fclose($fp);
?>
<div>
Your answers have been successfully saved!<br/>
  <input type="button" value="Go Back Home" onclick="document.location.href='welcome.html'"/></div>