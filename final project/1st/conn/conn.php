<?php
error_reporting(E_ALL & ~E_NOTICE);
define('db_user', "webBU");
define('db_password', "acm1234");
define('db_host', "localhost");
define('admin_user', "webBUadmin");
define('admin_password', "acm1234");


session_start();
$conn=mysql_connect(db_host,db_user,db_password);
mysql_select_db(DBoard,$conn) or die("error".mysql_error());