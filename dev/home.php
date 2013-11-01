<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title id="ptitle">Home onTest</title>
<link href="stylecase/11102013.css" rel="stylesheet"/>
<link href="stylecase/11102013-1.css" rel="stylesheet"/>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="driver.js"></script>
<script src="driver-3rdparty.js"></script>
<script src="http://www.pg.site88.net/dev/notify/jquery.notific8.js"></script>
<script src="http://www.pg.site88.net/dev/notify/jquery.notific8.min.js"></script>

<link rel="stylesheet" href="http://www.pg.site88.net/dev/notify/jquery.notific8.css">
<link rel="stylesheet" href="http://www.pg.site88.net/dev/notify/jquery.notific8.min.css">
<script type="text/javascript">
hs.graphicsDir = '../highslide/graphics/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';

</script>

</head>

<body id="b" class="appbody">
<div id="contentainer" class="contentainer"><h1>#Stuff Under Construction !!!</h1><br/>Hence have cliff's and pre-mature stuff.</div>
<div class="option" id="Opbar">
<!--<button class="button-opt" id="hd" onclick="hd()">Hide</button>
<button class="button-opt" id="sh" onclick="sh()" style="display:none;">Show</button>-->
<br><br>
<span onclick="con('/write-aj.php','Write a note.')" class="imagebtton"><span class="butt-text">Write note</span></span>
<br><br><br><br><br>
<span onclick="con('browse.php?ref=today','Notes T-day')" class="imagebtton"><font class="butt-text">Today</font></span>
<br><br><br><br><br>

<span title="See all your Image contents" onclick="con('folders.php','pictures')" class="imagebtton"><span class="butt-text">Images</span></span>
<br><br><br><br><br>

<br><br><br><br><br>

<br><br><br><br><br />
<span ondragover="bfordrop()" ondrop="dropon()" class="imagebtton" onclick="msgbox('Image Drop Show','All the images draged and dropped are displayed here and can be usefull to be inserted on to a note, later.')"><span id="dimage" ><i>drop show</i></span></span>
<br><br><br><br><br />
<span class="imagebtton"><textarea id="drop" rows="4" cols="12" dropzone="move" onmouseover="drop()" placeholder="Drag Images to here..."></textarea></span>
<span id="ishow"></span><br><br><br><br><br>
<span title="Back" id="statenav" class="statenav" alt="Back" onclick="back()"><img src="/nav.png" alt="Back"/></span>
<span id="slot">-1</span>
<div class="msgbox" id="msg" style="display:none;"></div>

</div>
</body>
</html>