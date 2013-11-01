<?php
$uid = 1234;
 $con = mysql_connect("localhost","root","dbase001");
 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
 $notes = mysql_real_escape_string($_POST['note']);
 mysql_select_db("test", $con);
 $sql="INSERT INTO notes(notes,id) VALUES ('$notes','$uid')";
if (!mysql_query($sql,$con))
   {
   die('Error: ' . mysql_error());
   }
 mysql_close($con);

?>


