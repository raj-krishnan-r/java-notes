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
<style>
.contain
{
	width:150px;
	height:150px;
	background:url(im/1.png);
	background-repeat:no-repeat;
	background-size:cover;
	position:relative;
	z-index:1;
}
.contain-overlay
{
	width:150px;
	height:20px;
	top:80%;
	background-repeat:no-repeat;
	background-size:cover;
	position:absolute;
	z-index:-1;
	display:none;
}

</style>
<script>
function op(i)
{
	var b= i;
	document.getElementById(i+'.1').style.display='block';
	document.getElementById(i).style.zIndex='0';
	document.body.background='im/'+b+'.png';
	document.body.style.backgroundRepeat='no-repeat';
	document.body.style.backgroundSize='cover';
	
}
function hop(i)
{
	document.getElementById(i+'.1').style.display='none';
	document.getElementById(i).style.zIndex='1';

}
</script>
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

}
?>
<div id="bottom"></div>
