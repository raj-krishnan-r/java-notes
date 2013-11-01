<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function fade(ob,s)
{
	if(s!=1)
	{
op=2;
var t=setInterval(function(){
document.getElementById(ob).style.opacity=op;
op=op-0.01;
pos++;
if(op<=0)
{
	window.clearInterval(t);
	document.getElementById(ob).style.display=none;
	return;
}
		},1);
	}
else
{
	op=0;
var t=setInterval(function(){
document.getElementById(ob).style.opacity=op;
op=op+0.01;
pos++;
if(op<=0)
{
	window.clearInterval(t);
	document.getElementById(ob).style.display=none;
	return;
}
		},10);
	}
}
function dontclose()
{
var unicode=event.keyCode? event.keyCode : event.charCode
alert(unicode);
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.door
{
	font-family: Arial, Helvetica, sans-serif;
	position:relative;
	width:50%;
	height:150px;
	background-color: #CCF;}
</style>
</head>

<body id="bdy" onkeydown="dontclose();">
<div class ="door" id = "door" style="left:50%">I have a lot of stuff here !</div>
<img src="../nav.png" width="40" height="70" id="back" />
<button onclick="fade('back','0')">Door</button>
<p>&nbsp;</p>
</body>
</html>