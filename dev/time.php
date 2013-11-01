<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function c()
{
var q=window.setInterval(function count()
{
var t = document.getElementById('t').innerHTML;
t++;
document.getElementById('t').innerHTML=t;
if(t==10)
{
	alert('10 Seconds Reached !!!, function aborted');
	window.clearInterval(q);
	return;
}
},1000);
}

</script>
</head>

<body onload="c()">
<p id="t">1</p>
</body>
</html>