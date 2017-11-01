<?php

$host="localhost";
$user="root";
$pass="";

mysql_connect($host,$user,$pass);
mysql_select_db("test");
$result = mysql_query("select * from  student
where name='aboorva'");
$row= mysql_fetch_row($result);  
if($row){
echo "	<table>
	
	<tr><td>email</td><td>$row[2]</td></tr>
	<tr><td>password</td><td>$row[2]</td></tr>
	</table>";
}
?>