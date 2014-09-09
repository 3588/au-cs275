<?php
require 'conn/conn.php';
include 'head.php';

$sql="select * from forum_user where username='$_SESSION[username]'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>


<div id="content">
<h2>Change password</h2>
<fieldset>
<legend>
Personal information 
</legend>
  <form action="action/formy.php" name="formy" method="post">
     <table>
        <tr><td>username:</td><td><?php echo $_SESSION['username']?></td> 
        </tr>    
        <tr><td>password:</td><td><input type="password" name="password" ></td> 
        </tr>
     </table>
    <input type="submit" name="submit" value="update">
  </form>
</fieldset>
</div>