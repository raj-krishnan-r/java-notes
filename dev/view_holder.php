<?php
//Coded and functions written by RAJKRISHNAN R rakkannannasa@gmail.com
// Month Namer
function month($i)
{
$sample = $i;
$month = substr($sample,3,2);
$day = substr($sample,0,2);
$year = substr($sample,6,5);
if($month=='01')
{
	$s ="January";
}
if($month=='02')
{
	$s ="February";
}
if($month=='03')
{
	$s ="March";
}
if($month=='04')
{
	$s ="April";
}
if($month=='05')
{
	$s ="May";
}
if($month=='06')
{
	$s ="June";
}
if($month=='07')
{
	$s ="July";
}
if($month=='08')
{
	$s ="August";
}
if($month=='09')
{
	$s ="September";
}
if($month=='10')
{
	$s ="October";
}
if($month=='11')
{
	$s ="November";
}
if($month=='12')
{
	$s ="December";
}
return $s;
}
// Ends here
// Day namer starts here..
//dayname("28/05/1993");
function dayname($d)
{
$sample = $d;
$month = substr($sample,3,2);
$day = substr($sample,0,2);
$year = substr($sample,6,5);
$jd=gregoriantojd($month,$day,$year);
$dayname = jddayofweek($jd,1);
return $dayname;
}
//dayname ends here
//Date Differnce starts here
function datediff($start)
{
date_default_timezone_set('Asia/Calcutta');
$theday =date('m/d/Y');
$end = $theday;
$sample = $start;
$month = substr($sample,3,2);
$day = substr($sample,0,2);
$year = substr($sample,6,5);
$start="".$month."/".$day."/".$year."";
$start_ts = strtotime($start);
$end_ts = strtotime($end);
$diff = $end_ts - $start_ts;
$diff= round($diff/86400);
if($diff>1||$diff==0)
{
	return "".$diff." days before";
}
	else
	{
return "".$diff." day before";
}
}
//date diff ends here
// Date Expand
function expand($e)
{
$sample = $e;
$month = substr($sample,3,2);
$day = substr($sample,0,2);
$year = substr($sample,6,5);
if($month=='01')
{
	$s ="January";
}
if($month=='02')
{
	$s ="February";
}
if($month=='03')
{
	$s ="March";
}
if($month=='04')
{
	$s ="April";
}
if($month=='05')
{
	$s ="May";
}
if($month=='06')
{
	$s ="June";
}
if($month=='07')
{
	$s ="July";
}
if($month=='08')
{
	$s ="August";
}
if($month=='09')
{
	$s ="September";
}
if($month=='10')
{
	$s ="October";
}
if($month=='11')
{
	$s ="November";
}
if($month=='12')
{
	$s ="December";
}
if($day=='01')
{
	$d="1st";
}
if($day=='02')
{
$day="2nd";
}
if($day=='03')
{
$day="3rd";
}
if($day=='04')
{
$day = "4th";
}
if($day=='05')
{
$day = "5th";
}
if($day=='06')
{
$day = "6th";
}
if($day=='07')
{
$day = "7th";
}
if($day=='08')
{
$day = "8th";
}
if($day=='09')
{
$day = "9th";
}
if($day=='10')
{
$day = "10th";
}
if($day=='11')
{
$day = "11th";
}
if($day=='12')
{
$day = "12th";
}
if($day=='13')
{
$day = "13th";
}
if($day=='14')
{
$day = "14th";
}
if($day=='15')
{
$day = "15th";
}
if($day=='16')
{
$day = "16th";
}
if($day=='17')
{
$day = "17th";
}
if($day=='18')
{
$day = "18th";
}
if($day=='19')
{
$day = "19th";
}
if($day=='20')
{
$day = "20th";
}
if($day=='21')
{
$day = "21st";
}
if($day=='22')
{
$day = "22nd";
}if($day=='23')
{
$day = "23rd";
}
if($day=='24')
{
$day = "24th";
}
if($day=='25')
{
$day = "25th";
}
if($day=='26')
{
$day = "26th";
}
if($day=='27')
{
$day = "27th";
}
if($day=='28')
{
$day = "28th";
}
if($day=='29')
{
$day = "29th";
}
if($day=='30')
{
$day = "30th";
}
if($day=='31')
{
$day = "31st";
}
$expand="".$day.", ".$s." ".$year."";
return $expand;
}
//date expand ends her
//day difference as integer
function intdatediff($start)
{
date_default_timezone_set('Asia/Calcutta');
$theday =date('m/d/Y');
$end = $theday;
$sample = $start;
$month = substr($sample,3,2);
$day = substr($sample,0,2);
$year = substr($sample,6,5);
$start="".$month."/".$day."/".$year."";
$start_ts = strtotime($start);
$end_ts = strtotime($end);
$diff = $end_ts - $start_ts;
$diff= round($diff/86400);
return $diff;
}
//return integer ends here

//next date starts here
function ndate($nd)
{
$sample = $nd;
date_default_timezone_set('Asia/Calcutta');
$month = substr($sample,3,2);
$day = substr($sample,0,2);
$year = substr($sample,6,5);
$ndate = date('d/m/Y', mktime(0,0,0,$month,($day+1),$year)); 
return $ndate;
}
// previous date starts here
function pdate($nd)
{
$sample = $nd;
date_default_timezone_set('Asia/Calcutta');
$month = substr($sample,3,2);
$day = substr($sample,0,2);
$year = substr($sample,6,5);
$ndate = date('d/m/Y', mktime(0,0,0,$month,($day-1),$year)); 
return $ndate;
}
?>
