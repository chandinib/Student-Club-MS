<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('iwp');
	$count=mysql_query('select count(toDo) from toDo');
	$sqlretrieve=mysql_query('select * from toDo');

	if(isset($_POST['delete']))
	{		
			for($i=0;$i<count($_POST['checkbox']);$i++)
			{
				$del_id = $_POST['checkbox'][$i];
				$sql = "DELETE FROM toDo WHERE id='$del_id'";
				$result = mysql_query($sql);
			}

			if($sqlretrieve){
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=dashboard-core.php\">";
			}
		}
									 		
	mysql_close($con);
?>