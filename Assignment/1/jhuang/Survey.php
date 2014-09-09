<?php
//print_r($_POST);
/*init*/
$name=$_POST['name'];
$age=$_POST['age'];
(int)$nu=$_POST['question'];

echo "Welcome ".$name."<br/><br/>";
echo "Your age is ".$age."<br/><br/>";
echo "You chose to create ".$nu." survey ";
/*set plural */
if($nu!=1)
$q = "questions";
else
$q = "question";

echo $q.". Here are your survey question:<br/><br/>"
?>

<form action="Confirmation.php" method="post">
<input name="name" value="<?=$name;?>" hidden>
<input name="age" value="<?=$age;?>" hidden>
<input name="nu" value="<?=$nu;?>" hidden>
<?php
for($i=1;$i<=$nu;$i++)
{
	echo"<strong>Question ".$i."</strong> :"?>
	 <label><input type="radio" name="Question<?=$i?>" value="Strongly Agree" id="strongly">Strongly Agree</label>
     &nbsp;&nbsp;
      <label><input type="radio" name="Question<?=$i?>" value="Somewhat Agree" id="somewhat">Somewhat Agree</label>
      &nbsp;&nbsp;
       <label><input type="radio" name="Question<?=$i?>" value="Disagree" id="Disagree">Disagree</label>
       &nbsp;&nbsp;
       <label><input type="radio" name="Question<?=$i?>" value="Strongly Disagree" id="Disagree">Strongly Disagree</label>
       <br/><br/>
	<?php
    ;
}
?>
<div style="margin:0 auto; width:400">
<input name="" type="submit" value="Submit your answers"></div>
</form>