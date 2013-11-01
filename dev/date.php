<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function t(type)
{
var d = new Date(hours);
var date = d.getDate();
var month = d.getMonth()+1;
var year = d.getFullYear();
var time = d.getHours();
alert(time);
if(month<10)
{
	month='0'+month;
}
if(type=='undefined'||1)
{
var currentt = ''+date+'/'+month+'/'+year+'';
}
if(type==2)
{
var currentt = ''+month+'/'+date+'/'+year+'';
	
}
return currentt;
}
</script>
</head>

<body onload="t()">
</body>
</html>