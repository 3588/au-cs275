<?php 
error_reporting(E_ALL & ~E_NOTICE);
require 'conn/conn.php';
include 'head.php';
$sql="select * from discussion order by sticky desc,datetime desc";

$result=mysql_query($sql);
?>
<div id="content">
<h2>Forum</h2>
<p>
<table  width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#111">
  <tr bgcolor="#CCCCCC" >
     <td width="6%">state</td>
     <td width="54%">discussion</td>
     <td width="8%">vote</td>
     <td width="8%">comment</td>
     <td width="24%">date</td>
  </tr><?php 
     $a=0 ; //There is no record for 0
     while ($rows=mysql_fetch_array($result)){
     	$a=1 ; //There is record for 1
  ?>
    <tr bgcolor="#FFFFFF" >
     <td align="center"><?php if ($rows['sticky']=="1"){?>               
     <img alt="topest" src="images/sticky.jpg" width="20" height="20" align="absmiddle"><?php  }?></td><td><a href="listmain.php?id=<?php echo $rows['id'];?>"><?php echo $rows['topic'];?></a></td>
     <td><?php echo $rows['vote']?></td>
     <td><?php echo $rows['reply']?></td>
     <td><?php echo $rows['datetime']?></td>
  </tr><?php }if ($a==0){?>
    <tr bgcolor="#FFFFFF" ><td colspan="5"><b>Currently there is no Posting record£¡</b></td></tr><?php }?>
    <tr bgcolor="#FFFFFF" >
     <td colspan="5">
	<?php if (!$_SESSION['username']){
?>
     <input type="button" disabled="disabled" onclick="location.href='add.php'" value="New discussion"><?php }else{?>
     <input type="button"  onclick="location.href='add.php'" value="New discussion"><?php }?></td>
  </tr>
</table>
<?php 
$sql="select count(*)as total from discussion";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$total=$row['total'];

?>
<?php 
include 'foot.php';

?>
