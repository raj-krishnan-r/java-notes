<?php
//Programmed by RAJKRISHNAN.. ADM Notes.
session_start();
include("encrypt_notes.php");
$uid = $_SESSION['UserId'];
$ip = $_SERVER['REMOTE_ADDR'];
$location = $_SESSION['location'];
$date = $_POST['date'];
$sample = $date;
$month = substr($sample,3,2);
$day = substr($sample,0,2);
$year = substr($sample,6,5);
$jd=gregoriantojd($month,$day,$year);
$dayname = jddayofweek($jd,1);
//$time = $_POST['time'];
$device=$_SESSION['device'];
$tzone = $_SESSION['location'];
date_default_timezone_set(''.$tzone.'');
$odate=date('d/m/Y');
$time=date('h:m:s a');
$date=$odate;
//$time = date('h:i:s a');
$h=date('H');
$encmode=0;
// SQL Feeding starts here
 $con = mysql_connect("mysql1.000webhost.com","a8860159_pg","dbase001");
 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   echo "ConnIssue";
   }
   $notes = mysql_real_escape_string($_POST['notes']);
 mysql_select_db("a8860159_pg", $con);

 $sql="INSERT INTO notes(id,notes,date,time,device_type,location,odate,gdate,gmonth,gyear,dayname,hour,ip,encmode) VALUES ('$uid','$notes','$date','$time','$device','$location','$odate','$day','$month','$year','$dayname','$h','$ip','$encmode')";
//Acknowledge 
echo $notes;
echo $uid;
echo $year;
echo $dayname;
echo $ip;

//
if (!mysql_query($sql,$con))
   {
   die('Error: ' . mysql_error());
      echo "ConnIssue";

   }
 mysql_close($con);


?>


