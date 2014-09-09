<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add User</title>
</head>

<body>
<!--start for cs275 Assignment 7-->
<script type="text/javascript" src="../ajax/ajax.js"></script>
<!--end for cs275 Assignment 7-->
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

<form method="post" action="../action/save_user.php" onsubmit="return check();" name="reg">
<table width="500" border="1" bordercolor="#FF0000" align="center" cellpadding="5" cellspacing="1" class="mrg-top maintable">
<tr id="title">
<td colspan="2" bgcolor="#FF0000">Registering a new user</td>
</tr>
<tr>
<td width="23%"><strong>Username</strong></td>
<td width="77%"><input name="username" type="text" onblur="checkNameReg();">
<!--start for cs275 Assignment 7-->
<span id="returnbox"></span>
<!--end for cs275 Assignment 7-->
</td>
</tr>
<tr>
<td><strong>Password</strong></td>
<td><input name="password" type="password"></td>
</tr>
<tr>
<td></td>
<td>
<input name="groupID" type="hidden" value="1">
<input name="submit1" type="submit" value="submit" />
<input name="submit2" type="reset" value="reset" /></td>
</tr>
</table></form>

</body>
</html>
