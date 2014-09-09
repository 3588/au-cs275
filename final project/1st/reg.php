<?php 
error_reporting(E_ALL & ~E_NOTICE);
require 'conn/conn.php';
include 'head.php';

if ($_POST['submit1']){header("Location:action/reg.php");}
?>
<script language="javascript">   
function check(){
   if(reg.username.value==""){
       alert("Account name must not be empty");
       reg.username.focus();
       return false;
      }
   if(reg.password.value==""){
       alert("Password must not be empty");
       reg.password.focus();
       return false;
      }
}
</script>

<div id="content">
<h2>Registering a new user</h2>
<fieldset>
<form method="post" action="action/reg.php" onsubmit="return check();" name="reg">
<table>
<tr>
 <td>Username:</td>
 <td><input name="username" type="text">&nbsp;&nbsp;</td>
</tr>
<tr>
 <td>Password:</td>
 <td><input name="password" type="password"></td>
</tr>
</table>

 <input type="submit" name="submit1" value="submit"> 
 <input type="reset" name="submit2" value="reset">

</form>
</fieldset>
</div>
<?
include 'foot.php';

?>