<!DOCTYPE html>
<html>
	<head>
		<title>
			Dashboard | Club Name
		</title>
		
		<style>
			@font-face{
						font-family:Font;
						src:url(Roboto-Regular.ttf);
			}
			body	{
						margin:0px;
					}
			#header {
					    font-family:Font;
					    background-color:#0066ff;
					    color:white;
					    text-align:center;
					    height:60px;
					    margin:0px;
					    padding-top:20px;
					}
			#meetings{
						font-family:Font;
					    background-color:#eeeeee;
					    color:black;
					    text-align:center;
					    height:130px;
					    margin:0px;
					    padding-top:20px;
					}
			#todo {
						padding:1%;
					    font-family:Font;
					    line-height:30px;
					    background-color:#eeeeee;
					    height:350px;
					    width:25%;
					    float:left; 
				}
			#section {
			   			font-family:Font;
			   			background-color:#b3d1ff;
			   			width:71%;
			   			height:350px; 
			    		float:left;
			    		padding:1%;
					}
			#footer {
					   background-color:#0066ff;
					   color:white;
					   clear:both;
					   text-align:center;
					   padding:5px; 
			}
			h3		{
						margin:0px;
						text-align:center;
						color:#0066ff;
					}
			input[type=checkbox]	{	margin-top:5%;
									}
			input[type=image]	{
									display:inline-block;
									margin-top:2%;
									margin-left:70px;
									height:30px;
									width:30px;
								}
			input[type=text]	{
									font-family:Font;
									display:block;
									margin-top:1%;
									margin-left:auto;
									margin-right:auto;
									width:250px;
									border-radius: 5px;
									border:1px solid #0066ff;
								}
			button {	display:block;
					    background-color: #0066ff;
					    border-radius: 5px;
					    border-style:none;
					    color: white;
					    padding: 15px 32px;
					    text-align: center;
					    display: inline-block;
					    font-size: 16px;
					    width:200px;
					    margin-left: auto;
					    margin-right: auto;
					 }
			button:hover {	display:block;
						    background-color: #b3d1ff;
						    border-style:none;
						    color: #0066ff;
						    border:1px solid #0066ff;
						    border-radius: 5px;
					    	padding: 15px 32px;
						    text-align: center;
						    display: inline-block;
						    font-size: 16px;
						    width:200px;
						    margin-left: auto;
					    	margin-right: auto;
						}
			table#boardactivities {
						margin-top:1%;
						align:center;

					}

			tr,td{
						padding:3%;
					}

			table#toDoTable {
						margin-top:1%;
					}		

		</style>

	</head>


		<body>
			<h1 id="header">Students Club Management System</h1>

			<form  id="meetings" action="meetingProcess.php" method="POST">
			<h3>Meeting Updates</h3>

				<table id="meetingTable" align="center">
				<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					$con=mysql_connect('localhost','root','');
					mysql_select_db('iwp');
					$sqlretrieve1=mysql_query('select * from meetings');

					while($row=mysql_fetch_array($sqlretrieve1))
					{ ?>
						<tr>
						<td><input name="checkbox1[]" type="checkbox" id="checkbox1[]" value=" <?php echo $row['id']; ?> "></td>
						<td><?php echo $row['meeting']; ?> </td>
						</tr>
					<?php } ?>
				<tr>
				<td><input type="checkbox" name="checkbox1" ></td>
				<td><input type="text" name="newMeeting"></td>
				</tr>
			</table>
			<input type="image" src="add.png" style="display:inline-block;width:20px;height:20px;margin-left:0%;margin-top:0%;margin-bottom:0%;" onmouseover="this.src='addhover.png'" onmouseout="this.src='add.png'" value="AddMeeting" formaction="meetingProcess.php">
			<input type="image" src="delete.png" style="display:inline-block;width:20px;height:20px;margin-left:1%;margin-top:0%;margin-bottom:0%;" onmouseover="this.src='deletehover.png'" onmouseout="this.src='delete.png'" value="deleteMeeting" formaction="meetingDeleteProcess.php" name="deleteMeeting" id="deleteMeeting">

			</form>

			<div id="footer"></div>


			<form id="todo" action="toDoProcess.php" method="POST">
			<h3>Upcoming Tasks</h3>

			<table id="toDoTable">
			<?php
					error_reporting(E_ALL ^ E_DEPRECATED);
					$con=mysql_connect('localhost','root','');
					mysql_select_db('iwp');
					$sqlretrieve=mysql_query('select * from toDo');

					while($row=mysql_fetch_array($sqlretrieve))
					{ ?>
						<tr>
						<td><input name="checkbox[]" type="checkbox" id="checkbox[]" value=" <?php echo $row['id']; ?> "></td>
						<td> <?php echo $row['toDo']; ?> </td>
						</tr>
					<?php } ?>
				<tr>
				<td><input type="checkbox" name="checkbox" ></td>
				<td><input type="text" name="newToDo"></td>
			</tr>
			</table>
			 <input type="image" src="add.png" onmouseover="this.src='addhover.png'" onmouseout="this.src='add.png'" value="AddToDo" formaction="toDoProcess.php">
			 <input type="image" src="delete.png" onmouseover="this.src='deletehover.png'" onmouseout="this.src='delete.png'" value="DeleteToDo" formaction="toDoDeleteProcess.php" name="delete" id="delete">

			 </form>


			<div id="section">
			<h3>Board Activities</h3>
			<table id="boardactivities" align="center">
				<tr>
					<td><button type="button">Events</button></td>
					<td><button type="button">Projects</button></td>
					<td><button type="button">Posters</button></td>
				</tr>
				<tr>
					<td><button type="button">Free Slots</button></td>
					<td><button type="button">Finance</button></td>
					<td><button type="button">Cocurricular</button></td>
				</tr>
				<tr>
					<td><button type="button">Approve Members</button></td>
					<td><button type="button">Change Roles</button></td>
				</tr>

			</table>
			</div>

			<div id="footer"></div>


	</body>
</html>