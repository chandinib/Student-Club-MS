<?php

$toDo=filter_input(INPUT_POST,'newToDo');

$con=mysql_connect('localhost','root','');
mysql_select_db('iwp');

$sqlempty="select * from toDo";
if($sqlempty)
{
	$sqlalter="ALTER TABLE toDo AUTO_INCREMENT = 1";
	mysql_query($sqlalter);
}

$sql="insert into toDo(toDo,completed) values('$toDo',0)";

$res=mysql_query($sql);

if($res)
{
	
	header('location: ../IWP/dashboard-board.php?msg= Successful!');
}
else
{
	header('location: ../IWP/dashboard-board.php?msg=Technical Error!');
}

mysql_close($con);

?>