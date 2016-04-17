<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('iwp');
	$count=mysql_query('select count(meeting) from meetings');
	$sqlretrieve=mysql_query('select * from meetings');

	if(isset($_POST['deleteMeeting']))
	{		
			for($i=0;$i<count($_POST['checkbox1']);$i++)
			{
				$del_id = $_POST['checkbox1'][$i];
				$sql = "DELETE FROM meetings WHERE id='$del_id'";
				$result = mysql_query($sql);
			}

			if($sqlretrieve){	
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=dashboard-board.php\">";
			}
		}
									 		
	mysql_close($con);
?>