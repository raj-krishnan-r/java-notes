<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="stylecase/11102013.css">
<script>
function hidemsg()
{
	document.getElementById('msg').style.display='none';
}
function msgbox(h,c)
{

	document.getElementById('msg').style.display='block';
	c='<input type="file"/>Number of Rajkrishnan'
var msg = '<span class="msgbox-close" onclick="hidemsg()" title="Click to close">close</span><span class="msgbox-heading">'+h+'</span><span class="msgbox-content">'+c+'</span>';
document.getElementById('msg').innerHTML=msg;
}
</script>
</head>

<body id="b">

<br><button onclick="msgbox('9497336650','s')">Click</button>
<div id="msg" class="msgbox" style="display:none;"></div>
</body>
</html>