<?php
  $db = mysql_connect("localhost", "root", "");
  $er = mysql_select_db("ram");
  
  $result = mysql_query("UPDATE role=1-'role' where name='name' && username='username'  FROM names");
?>

<table border="2">
   <tr>
      <th>Name</th>
      <th>Username</th>
      <th>Roll</th>
    </tr>
<? php
    while ($array = mysql_fetch_row($result));
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
    }
    echo "</table>
    
    
?>