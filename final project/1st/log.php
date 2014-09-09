<?php 
include 'head.php';
?>
<script language="javascript">   
function check(){
   if(log.username.value==""){
       alert("Account name must not be empty");
       log.username.focus();
       return false;
      }
   if(log.password.value==""){
       alert("Password must not be empty");
       log.password.focus();
       return false;
      }
}




</script>
<div id="content">
<h2>users login</h2>
<fieldset>
<form name="log" method="post" action="action/log.php" onsubmit="return check();">
<table>
<tr>
 <td>username:</td>
 <td><input name="username" type="text"></td>
</tr>
<tr>
 <td>password:</td>
 <td><input name="password" type="password"></td>
</tr>
</table>
<input type="submit" name="submit" value="login">
</form>
</fieldset></div>
<?php include 'foot.php';?>