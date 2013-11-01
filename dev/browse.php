<?php
include("view_holder.php");
include("magic.php");
include("encrypt_notes.php");
session_start();
$lock = $_SESSION['lock'];
if($lock==1)
{
header('location: /alock.php');
}
$uid = $_SESSION['UserId'];
$location = $_SESSION['location'];
$ref = $_GET['ref'];
$qd = $_GET['date'];
$t=$_GET['t'];
$ddd = $qd;
date_default_timezone_set(''.$location.'');
$today=date('d/m/Y');
?>
<script type="text/javascript">
hs.graphicsDir = '/highslide/graphics/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';
</script>
</head>

<body class="b" onLoad="page('Browse Notes');">
<div class="options-browse">
<?php
if($ref=='browse'&&$qd!=$today)
{
echo "<font title = \"".expand("".$qd."")."\"class=\"date\">".$qd." </font>,".dayname("".$qd."")."<font> | ".datediff("".$qd."")." </font>&nbsp;&nbsp;&nbsp;&nbsp;<a title = \"Click to go to the previous date, ".pdate("".$qd."")."\" onclick = \"con('browse.php?date=".pdate("".$qd."")."&ref=browse','')\"><img class=\"skip\" src=\"http://pg.site88.net/file/290513030914previous_n.png\" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a title = \"Click to go to the next date, ".ndate("".$qd."")."\" onclick = \"con('browse.php?date=".ndate("".$qd."")."&ref=browse','')\"><img class=\"skip\" src=\"http://pg.site88.net/file/290513030940next_n.png\" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"/dropdatev2.php\" title = \"Skip to notes by choosing date.\" onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"\"><img src=\"http://pg.site88.net/file/290513060451go-jump.png\" class=\"skip\"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a title = \"Sort all starred notes.\" href = \"/starred.php\"><img class=\"skip\" src=\"http://pg.site88.net/file/290513092629star.png\" /></a></div>
<br><br><br />";
}
if($ref=='today'||$qd==$today)
{
$qd=$today;
echo "<font class=\"date\" title = \"".expand("".$qd."")."\">Today you wrote</font>&nbsp;&nbsp;&nbsp;&nbsp;<span title = \"Click to view the notes of yestersday, ".pdate("".$qd."")."\" onclick = \"con('browse.php?date=".pdate("".$qd."")."&ref=browse','')\"><img class=\"skip\" src=\"http://pg.site88.net/file/290513030914previous_n.png\" /></span>&nbsp;&nbsp;&nbsp;&nbsp;<a title = \"Skip to notes by choosing date.\" href = \"/dropdatev2.php\" onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"\"><img src=\"http://pg.site88.net/file/290513060451go-jump.png\" class=\"skip\"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a title = \"Sort all starred notes.\" href = \"/starred.php\"><img class=\"skip\" src=\"http://pg.site88.net/file/290513092629star.png\" /></a></div>
<br><br><br />";
}
?>
<?php
mysql_connect("mysql1.000webhost.com", "a8860159_pg", "dbase001") or die(mysql_error()); 
mysql_select_db("a8860159_pg") or die(mysql_error());
$data = mysql_query('SELECT notes, date, time, star,encmode FROM notes WHERE date = "'.$qd.'"AND id = "'.$uid.'"')
or die(mysql_error()); 
$count=mysql_num_rows($data);
while($info = mysql_fetch_array( $data )) 
{
$encmode=$info['encmode'];
$notes = $info['notes'];
$star = $info['star'];
$plain_notes=strip_tags($notes);
//
if($encmode=='1')
{
$strip_notes=convert($notes,$key);
$strip_notes = stripslashes($strip_notes);
$strip_notes = magic("".$strip_notes."");
}
else
{
$strip_notes = stripslashes($notes);
$strip_notes = magic("".$strip_notes."");	
}
$date = $info['date'];
$time = $info['time'];
$id = substr($time,0,8);
echo "<div class=\"note\" ><div class=\"notedate\"draggable=\"true\" ondragstart=\"dragnote()\" id='{ \"t\":\"10:07:02\" , \"d\":\"10/10/2013\" }'>&nbsp;&nbsp;&nbsp;".$time." - <font class=\"noteoptions\"><a title = \"Click for starring or adding tags to this note.\" href = \"notes.php?t=".$time."\" onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"\"><img class=\"sicon\" src=\"http://pg.site88.net/file/280513012704icon-settings.png\"/></a>&nbsp;&nbsp;<a title = \"Click for information related to this note.\" href = \"/noteinfo.php?time=".$time."&ref=view\" onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"\"><img src=\"http://pg.site88.net/file/280513013313info.png\" class=\"sicon\"/></a>&nbsp;&nbsp;<a title = \"Share this note to another person.\" href = \"/share.php?time=".$time."&date=".$date."&ref=view&type=note\" onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"\"><img src=\"http://pg.site88.net/file/090613070417share.jpg\" class=\"sicon\"/></a>";
if($star=='1')
{
echo "&nbsp;&nbsp;<img title=\"This note is starred.\" src = \"http://pg.site88.net/file/290513092629star.png\" class=\"sicon\">";
}
echo"&nbsp;&nbsp;<span class=\"sicon\"><a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-lang=\"en\" data-text=\"".$plain_notes."\" data-url=\"http://bit.ly/VcZwoA\" data-count=\"none\">Tweet this note</a></span>";
echo"</font></div><font class=\"notefont\">&nbsp;&nbsp;&nbsp;".$strip_notes."</font></div>";
echo"<br></br>";
}
if($count==0)
{
echo"<div class=\"empty\"><font class=\"emptyfont\">It seems as if you hadn't wrote anything this day,<a href = \"/write.php?ref=browse&date=".$qd."\">Click to add a note to this date.</a></font></div>";
}
?>
<div class="boptions">
        <font class="fontboptions"><a href = "/write.php?ref=browse&date=<?php echo $qd; ?>">Add a note to this date</a></font></div>