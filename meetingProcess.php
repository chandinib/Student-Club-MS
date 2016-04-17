<?php

	$meeting=filter_input(INPUT_POST,'newMeeting');

	$con=mysql_connect('localhost','root','');
	mysql_select_db('iwp');

	$sqlempty="select * from meetings";
	if($sqlempty)
	{
		$sqlalter="ALTER TABLE meetings AUTO_INCREMENT = 1";
		mysql_query($sqlalter);
	}

	$sql="insert into meetings(meeting,completed) values('$meeting',0)";

	$res=mysql_query($sql);

	if($res){
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=dashboard-board.php\">";
	}
	
	mysql_close($con);


?>