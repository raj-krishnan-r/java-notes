<?php
include("magic.php");
session_start();
$folder=$_GET['folder'];
$uid = $_SESSION['UserId'];
$place = $_GET['place'];
if($place==0)
{
	$pplace=NULL;
}
else
{
$pplace=$place-1;
}
$nplace=$place+1;
/*if ($_SESSION['s']!=1)
{
header('location:/s.php?state=2');
}*/
$return = $_SESSION['rdate'];
$smid = $_GET['imageid'];
?>
<style>
.options {
	font-size: 14px;
	 font-family:"Segoe UI Light", Arial;
	  position:fixed;
	   background-color:#E8F3FF;
	    margin:0px;
		 width:100%;
		  height:45px; 
	/*//border: outset #360 1px; opacity:1.0;
	   -moz-border-radius: 1px;
    -webkit-border-radius: 1px;
/*    border-radius: 10px;
*/	border:dotted
    border: 1px solid #36C;
	top:0px;
	right:0px;}
/*.options:hover
{
opacity:1.0;
filter:alpha(opacity=100); /* For IE8 and earlier */
}*/
.opfont
{
	font-size:18px;
	color:#0C9}
.dayname{
color:#06C;
font-family:"Segoe UI Light", Arial;
}
.date
{
	font-size: 24px;
	font-family: "Segoe UI Light", Arial;
	color: #093;
	text-align: center;
	cursor: pointer;
}
.note
{font-family:Arial, Helvetica, sans-serif;
border: thin #036;
background-color:#ABB9E9;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
border:dotted
border: 1px solid #36C;
/* height:80%;
*/ width:100%;
right:001px;
}
.notefont
{font-family:Arial, Helvetica, sans-serif;
color:#FFF;
font-size:15px;
}
.notedate
{font-family:"Segoe UI Light", Arial;
color:#039;
font-size:15px;
width:90%;
}
.noteoptions
{
	text-align:right;
	
	}
.seperator
{text-align:center;
color:#033;
font-size:20px;}

.boptions {
	font-size: 10px;
	 font-family:"Segoe UI Light", Arial;
	  position:fixed;
	   background-color:#E8F3FF;
 margin:1px;
		 width:100%;
		  height:30px; 
/*border: outset #360 1px; opacity:1.0;*/
	border:dotted
border: 1px solid #36C;
	bottom:0px;
	text-align:center;
	right:0px;}
	.fontboptions
	{
		font-family:"Segoe UI Light", Arial;
		font-size:12px;
}
.sicon
{width:15px;
height:15px;
top:3px;
opacity:0.6;
filter:alpha(opacity=100);
animation:ease-out;
}
.sicon:hover
{
opacity:1.0;
filter:alpha(opacity=100); /* For IE8 and earlier */
}
.b
{
	background-color:#FFF;;
}
.skip
{width:30px;
height:30px;
top:3px;
opacity:0.6;
filter:alpha(opacity=100);
animation:ease-out;
}
.skip:hover
{
opacity:1.0;
filter:alpha(opacity=100); /* For IE8 and earlier */
}
.empty
{
font-family:Arial, Helvetica, sans-serif;
border: thin #036;
background-color:#CCCCCC;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
border:dotted
border: 1px solid #36C;
/* height:80%;
*/ width:100%;
height:250px;
right:001px;
height:100%;
}
.emptyfont
{
	font-family:Arial, Helvetica, sans-serif;
	color:#69C;
}
.genbox
{
font-family:Arial, Helvetica, sans-serif;
border-radius:10px;
border: 4px solid #36C;
margin:10px;
min-width:400px;
min-height:400px;
padding: 4px !important;
}
.iviewerbody
{
	background-color:#000;
}
.iviewer-image
{
}
.iviewertopfont
{ font-family:Arial, Helvetica, sans-serif;
color:#CCC;
width:30px;
height:30px;}
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
.image
{
	background:#666;
	margin: 10px;
	border:solid #CFF;
	position:relative;
	top:25px;
	max-height:90%;
	max-width:90%;
	margin-left:20%}
.ioptions
{
	font-size: 14px;
	 font-family:"Segoe UI Light", Arial;
	  position:fixed;
	   background-color:#999999;
	    margin:0px;
		 width:100%;
		  height:25px; 
	/*//border: outset #360 1px; opacity:1.0;
	   -moz-border-radius: 1px;
    -webkit-border-radius: 1px;
/*    border-radius: 10px;
*/	border:dotted
    border: 1px solid #36C;
	top:0px;
	right:0px;
	opacity:0.5;}
	.ioptions:hover
{
opacity:1.0;
filter:alpha(opacity=100); /* For IE8 and earlier */
}
.options:hover
{
opacity:1.0;
filter:alpha(opacity=100); /* For IE8 and earlier */
}
.cherish{
    position: absolute;
    top: 15%;
    left: 15%;
/*margin-top: 50%;
    margin-left: 50%;*/
	border:outset #669;
    background-color: #9999;
}
.trouble
{
	position: absolute;
	font-family: Arial, Helvetica, sans-serif;
	color: #666;
	font-size: 14px;
	border: solid #699 1px;
	top: 50%;
	left: 50%;
	right: 50%;
	width: 600px;
	height: 150px;
	
}
.iop {
	font-size: 10px;
	 font-family:"Segoe UI Light", Arial;
	  position:fixed;
	   background-color:#D7D7D7;
 margin:1px;
		 width:100%;
		  height:30px; 
/*border: outset #360 1px; opacity:1.0;*/
border: 1px solid #36C;
	bottom:0px;
	text-align:center;
	right:0px;}
.itd
{
	font-family:Arial, Helvetica, sans-serif;
	right:80%;
	top: 35px;
	-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius:10px;
border:dotted;
border: 1px solid #36C;
height:400px;
 width:19%;
 height:90%;
 position:absolute;}
 .title
 {
	 font-family:Arial, Helvetica, sans-serif;
	 font-size:15px;
	 color:#06F;
	 text-align:center;
	 font-weight:bolder;
 }
 .des
 {
	 font-family:Arial, Helvetica, sans-serif;
	 font-size:12px;
	 color:#CCC;
 }
 .iinfo
 {
	 font-family:Arial, Helvetica, sans-serif;
	 font-size:9px;
	 color:#CCC;
 }
 .genbox-ioptions
{
font-family:Arial, Helvetica, sans-serif;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius:10px;
border:dotted;
border: 1px solid #36C;
margin:6px;
height:20px;
width:350px;
}
.genbox-ioptions:hover
{
	background-color:#099;
}
.ioptions-font
{
	font-family:Arial, Helvetica, sans-serif;
	size:18;
	color:#69C;
}
.nvicon-iv
{
width:10%;
height:30px;
top:35px;
opacity:0.4;
filter:alpha(opacity=100);
animation:ease-out;
left:90%;
position:fixed;}
.nvicon-iv:hover
{
opacity:1.0;
filter:alpha(opacity=100); /* For IE8 and earlier */
}
</style>
<title>Notes-Image Viewer</title>

<link href="/style/fonts.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
hs.graphicsDir = '/highslide/graphics/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';
</script>
</head>

<body class="iviewerbody">
<div class="ioptions">
    <input  type="submit" name="back" id="back" value="&lt;&lt;Back" onClick="window.back()"/>
    <font class="iviewertopfont"> | <a class="iviewertopfont" href="/iviewer.php?folder=
	<?php echo $folder; ?>&place=<?php echo $place; ?>&imageid=<?php echo $smid; ?>" title="Open the same window in a new window." target="new">Expanded View</a></font></div>
 <?php if($pplace!=NULL)
 {
	 mysql_connect("mysql1.000webhost.com", "a8860159_pg", "dbase001") or die(mysql_error()); 
 mysql_select_db("a8860159_pg") or die(mysql_error());
 $data = mysql_query('SELECT title,mid FROM attach WHERE folder = "'.$folder.'" AND uid = "'.$uid.'" LIMIT '.$pplace.',1')
 or die(mysql_error()); 
 while($info = mysql_fetch_array( $data )) 
{
	$ptitle=$info['title'];
$pmid=$info['mid'];
}
mysql_close();
 }
 mysql_connect("mysql1.000webhost.com", "a8860159_pg", "dbase001") or die(mysql_error()); 
 mysql_select_db("a8860159_pg") or die(mysql_error());
 $data = mysql_query('SELECT title,mid FROM attach WHERE folder = "'.$folder.'" AND uid = "'.$uid.'" LIMIT '.$nplace.',1')
 or die(mysql_error()); 
 $count=mysql_num_rows($data);
 while($info = mysql_fetch_array( $data )) 
{
		$ntitle=$info['title'];
$nmid=$info['mid'];
}
mysql_close();
?>

<?php
mysql_connect("mysql1.000webhost.com", "a8860159_pg", "dbase001") or die(mysql_error()); 
 mysql_select_db("a8860159_pg") or die(mysql_error());
 $data = mysql_query('SELECT title,description,date,capture FROM attach WHERE mid = "'.$smid.'"')
 or die(mysql_error()); 
 while($info = mysql_fetch_array( $data )) 
{
$des = $info['description'];
$des = magic($des);
$title = $info['title'];
$title=magic($title);
$date = $info['date'];
$capture = $info['capture'];
if($capture==NULL)
{
$capture=$date;
}
echo "<div><img class=\"image\" src =\"image.php?mid=".$smid."\" alt = \"Image loading please wait...\"/></div><div class=\"itd\"
><span class=\"title\">".$title."</span><br><span class=\"des\">".$des."</span><hr width=\"100%\" noshade=\"noshade\"><span class=\"iinfo\">Uploaded on  ".$date."</span><br><span class=\"iinfo\">Captured on ".$capture."</span></div><div class=\"iop\"> <a class = \"font-10\" href = \"/photo/download_image.php?mid=".$smid."\">Download Image</a> </div>";
/*
| <a class = \"font-10\" onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\" href = \"/ioptions.php?mid=".$smid."\">Image Options</a>";*/
}
?>

<div class="nvicon-iv">
<a title="<?php echo $ptitle; ?> - Previous image in the folder." onclick= "con('iviewer.php?imageid=<?php echo $pmid;?>&place=<?php echo $pplace;?>&folder=<?php echo $folder;?>','Loading');"><?php if($pplace!=NULL){echo"<img src=\"http://pg.site88.net/file/290513030914previous_n.png\" alt = \"Previous\"/></a>";}?>
&nbsp;&nbsp;<a title="<?php echo $ntitle; ?> - Next image in the folder." onclick="con('iviewer.php?imageid=<?php echo $nmid;?>&place=<?php echo $nplace;?>&folder=<?php echo $folder;?>','Loading');"><?php if($nmid!=NULL){echo "<img src=\"http://pg.site88.net/file/290513030940next_n.png\" alt = \"Next\"/></a>";}?>

</div>
</body>
</html>