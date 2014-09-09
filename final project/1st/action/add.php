<?php
require '../conn/conn.php';

$name= $_SESSION['username'];

$sql="select * from forum_user where username='$name'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$name=$row['username'];
$sticky=$_POST['sticky'];
$detail=$_POST['detail'];
$topic=$_POST['topic'];
if (!$locked)$locked=0;else $locked=1;
if (!$sticky)$locked=0;else $sticky=1;

$sql="insert into discussion (topic,detail,name,datetime,sticky)
       values ('$topic','$detail','$name',now(),'$sticky')";

$result=mysql_query($sql);

header("location:../index.php");
?>