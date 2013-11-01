<?php
session_start();
$lock = $_SESSION['lock'];
if($lock==1)
{
	header('location: /alock.php');
	}
$uid = $_SESSION['UserId'];
?>
<style type="text/css">
.style1 {
	font-family: "Segoe UI Light", Arial;
	color: #063;
	font-size: 18px;
	margin:55px;
	padding:50px;
}
.left {
	text-align: right;
	color: #06C;
}
.formfonts {
	text-align: right;
	position: fixed;
	
}
.n {
	text-align: center;
}
.body
{      scrollbar-face-color: #b46868;}
.folderarea
{
}
.folder
{
	height:150px;
	font-family:"Segoe UI Light", Arial, Verdana;
	font-size:14px;
	cursor:pointer;
}
.folder:hover
{
	background-color:#39C;
}
.talign
{
	position:relative;
	top:0px;
	color:#036;
	text-shadow:#093;
	z-index:100;
	font-size:14px;
	font-family:Arial, Helvetica, sans-serif;
}
</style>
<?php
mysql_connect("mysql1.000webhost.com", "a8860159_pg", "dbase001") or die(mysql_error()); 
mysql_select_db("a8860159_pg") or die(mysql_error());
$data = mysql_query('SELECT title FROM ifolder WHERE uid = "'.$uid.'"')
or die(mysql_error()); 
$count=mysql_num_rows($data);
?>
<div class="options-browse">
<span class="date"><a href = "#top" title="Navigate to the top of page">top</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href = "#bottom" title="Navigate to the bottom of page">bottom</a></span> | 
<?php echo $count;
if ($count == 1)
{ 
echo " folder found. ";
}
else if ($count > 1 || $count < 1)
{
echo " folders found. ";
} ?>
</div>
<div>
<?php
while($info = mysql_fetch_array( $data )) 
{
$title = $info['title'];
echo "<span id = \"folder\" class = \"folder\" onclick=\"con('pictures.php?folder=".$title."','".$title."');\"><img src=\"http://pg.site88.net/file/030313090243folder_images_default.png\"><span class = \"talign\"><b>".$title."</b></span></span>";
}
?>
<div id="bottom"></div>
