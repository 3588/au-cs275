<?php
require '../conn/conn.php';

$id=$_POST['id'];
$username=$_SESSION['username'];

$sql="select * from forum_user where username='$username'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$topic_id=$id;
$reply_name=$row['username'];
$reply_detial=$_POST['reply_detail'];

$sql="select count(reply_id)as total_id from comment where topic_id='$id'";     //����ظ�λ��
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);


$total_id=$rows['total_id'];
if(!$rows)   //���û���� λ�� Ϊ1 ���� ��� λ��+1
{$total_id=1;}
else 
{$total_id=$total_id+1;} 

//����ظ�
$sql="insert into comment (topic_id,reply_id,reply_name,reply_detail,reply_datetime)
        values ('$id','$total_id','$reply_name','$reply_detial',now())";
$result=mysql_query($sql);
//����ɹ���ظ���+1
if ($result){
	$sql="update forum_topic set reply=$total_id where id=$topic_id";
	mysql_query($sql);
}

header("location:../listmain.php?id=$id");
?>