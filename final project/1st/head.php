<?php 
session_start();
error_reporting(E_ALL & ~E_NOTICE);
?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>cs275 Project - Forum</title>
<style type="text/css" media="all">
body{
   margin:0 px;
   paddomg:0 px;
   font:12 px verdana,arial,helvetica,sans-serif;
}
td,legend{
  font-size:14 px;
  line-height=16px;
}
p{
  font-size:12 px;
}
#head{margin:10 px 0px 10px 0px; padding:10px 8px 8px 20px; border: 1px solid black;
       background-color:#eee;font-size:14 px; height:14 px;}
#content{margin:5px;width:100%;padding:10px;}
</style>
</head>

<body>
<center>
 <h1>cs275 Project - Forum</h1>
</center>
<div id="head"><?php if ($_SESSION['username']){
?>
  <strong><?php echo $_SESSION['username'];?>,Welcome</strong>&nbsp;|
  <a href="index.php">Home Page</a>&nbsp;|
  <a href="formy.php">My Info</a>&nbsp;|
  <a href="action/logout.php">Logout</a>&nbsp;|
 <?php }else{?>
  <a href="index.php">Home Page</a>&nbsp;|
  <a href="reg.php">Reg</a>&nbsp;|
  <a href="log.php">Login</a>&nbsp;|
  
  <?php }?>
</div>
