<?php
$host = "localhost";
$username="root";
$password="dbase001";
$db_name="test";
$tbl_name="person";
$word=$_POST['word'];
$word="%".$word."%";
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
 mysql_select_db("$db_name")or die("cannot select DB");
$sql="SELECT name,uid FROM $tbl_name WHERE name LIKE '$word'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result))
{
echo $row['name'];
}
mysql_close();
?>