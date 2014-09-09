<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>
<!--start for cs275 Assignment 7-->
<script type="text/javascript" src="../ajax/ajax.js"></script>
<!--end for cs275 Assignment 7-->
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
<form method="post" action="../action/login.php" onsubmit="return check();" name="log">
<table width="600" border="1" align="center" cellpadding="5" cellspacing="1" bordercolor="#FF0000">
<tr id="title">
<td colspan="2" bgcolor="#FF0000">Login</td>
</tr>
<tr>
<td width="23%"><strong>Username</strong></td>
<td width="77%"><input name="username" type="text" onblur="checkNameLog();">
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
<input name="submit1" type="submit" value="Login" />
<input name="submit2" type="reset" value="reset" /></td>
</tr>
</table></form>
</body>
</html>
