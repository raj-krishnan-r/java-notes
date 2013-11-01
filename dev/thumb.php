<?php
session_start();
if($_SESSION['s']!='1')
{
	header('location:/s.php?state=2');
	}
$smid = $_GET['mid'];
$uid = $_SESSION['UserId'];
mysql_connect("mysql1.000webhost.com", "a8860159_pg", "dbase001") or die(mysql_error()); 
 mysql_select_db("a8860159_pg") or die(mysql_error());
 $data = mysql_query('SELECT thumb FROM attach WHERE mid = "'.$smid.'" AND uid="'.$uid.'"')
 or die(mysql_error()); 
 while($info = mysql_fetch_array( $data )) 
{
$img = $info['thumb'];
$link = "http://www.pg.site88.net".$img;
}
header('location: '.$link.'');
?>