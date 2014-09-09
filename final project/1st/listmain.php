<?php 
require 'conn/conn.php';
include 'head.php';
$id=$_GET['id'];
$sql="select * from discussion where id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
<div id="content">
<h2><?php echo $rows['topic']?></h2>
<em>Create By <?php echo $rows['name']?> @ <?php echo $rows['datetime']?></em>
<p>
<?php echo nl2br(htmlspecialchars($rows['detail']));?>
</p>
<hr size="1">

<?php 
$sql="select * from comment where topic_id='$id' order by reply_datetime DESC";
$result=mysql_query($sql);

while ($row=mysql_fetch_array($result)){?>
<dl>
   <dt><?php echo $row['reply_name'];?>-<em><?php echo $row['reply_datetime'];?></em></dt>
   <dd><?php echo nl2br(htmlspecialchars($row['reply_detail']))?></dd>
</dl><?php 
}if(!$row) echo '<p><strong>No comments records</strong></p>';
?>

<p>
<fieldset>
<legend>To post comment</legend>

<?php 

   if (!$_SESSION['username']){
   	echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;Please<a href="reg.php">registered</a>, OR <a href="log.php">Login</a> for post comment</p>';
   }else {
           	
   	    ?>
   	    	
   	 <form action="action/reply.php"  method="post">
   	 <input name="id" type="hidden" value="<?php echo $rows['id'];?>">
 <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" >
     <tr><td valign="top">comments</td>
         <td>
         <textarea name="reply_detail" rows="10" cols="45"></textarea></td>
     </tr>
     <tr><td valign="top">&nbsp;</td>
         <td><em>NO HTML tags</em></td>
     </tr>
 </table>
 <br>
    <input type="submit" name="submit" value="post">
    <input type="reset" name="reset" value="reset">
     </form>
   	    
   	    
   	    
<?php 
   }
?>
</fieldset>
</div>
<?php include 'foot.php';?>