<?php 
include 'head.php';




if ($_POST['submit1']){header("location:action/add.php");}
?>

<div id="content">
<h2>New discussion</h2>
<form method="post" action="action/add.php">
<table>
<tr>
 <td>Topic:</td>
 <td><input name="topic" type="text"></td>
</tr>
<tr>
 <td>Content:</td>
 <td><textarea name="detail" cols="50" rows="10"></textarea></td>
</tr>
</table>
<br>sticky <input type="checkbox" name="sticky" value="on">
<br><br>
 <input type="submit" name="submit1" value="post"> 
 <input type="reset" name="submit2" value="reset">
</form>
</div>