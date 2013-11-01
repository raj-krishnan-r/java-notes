<?php
session_start();
$uid = $_SESSION['UserId'];
$folder=$_GET['folder'];
?>
<style>
.ilist
{
	position:relative;
	width:100%;
}
.im
{
	margin-right:4%;
	margin-bottom:10%;
	margin-top:10%;
	position:relative;
	cursor:pointer;
}
.op
{
	font-family:Arial, Helvetica, sans-serif;
	border:solid #069;
	background-color: #099;
	text-decoration:none;
	position:relative;
	left:-90px;
	top:70px;
	color:#036;
	text-shadow:#093;
	z-index:100;
	cursor:pointer;

}
.top
{
	font-family:Arial, Helvetica, sans-serif;
	position:relative;
	right:-100px;
	top:-10px;
	text-decoration:underline none;
/*	margin:05px;
	padding:06px;*/
	cursor:pointer;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.info
{
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	color:#069;
}
.imst
{
box-shadow: 08px 8px 7px #B3D7FA;
}
</style>
<?php
$i=0;
 mysql_connect("mysql1.000webhost.com", "a8860159_pg", "dbase001") or die(mysql_error()); 
 mysql_select_db("a8860159_pg") or die(mysql_error());
 $data = mysql_query('SELECT Title, mid FROM attach WHERE uid = "'.$uid.'" AND folder = "'.$folder.'"')
 or die(mysql_error()); 
 $count=mysql_num_rows($data);
 if (!$count==0)
 {

 echo "<div id = \"options\" class = \"options-browse\" ><span class = \"date\">".$count."" ;
 if ($count==1)
 {
	 echo " Image found.";
	 }
	 else
	 {
echo " Images found";
		 }
		 echo "</span></div>";
 }
 echo "<div class = \"ilist\">";
 while($info = mysql_fetch_array( $data )) 
 {
$title = $info['Title'];
$mid=$info['mid'];
echo "<span class = \"im\" onclick=\"con('iviewer.php?imageid=".$mid."&folder=".$folder."&place=".$i."','Loading...')\">
<img class=\"imst\" src=\"thumb.php?mid=".$mid."\" alt=\"".$desc."\" title=\"".$title."\" style=\"width:125px\" height=\"140px\"/></span>";
$i++;
}
mysql_close();

 ?>
