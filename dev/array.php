<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
const state = new Array();
function add(s)
{
var slot=document.getElementById('slot').innerHTML;
state[slot++]=s;
document.getElementById('slot').innerHTML=s;
}
function tra()
{
	var slot=document.getElementById('slot').innerHTML;
	if(slot==0)
	{
		alert('Feed More !');
	}
	else
	{
alert(state[slot-1]);
document.getElementById('slot').innerHTML=--slot;
	}
}
</script>
</head>

<body onload="add(0)">
<span id="slot" style="display:none;">0</span>
<button onclick="add(1)">INC INC</button>
<button onclick="add(2)">INC INC</button>
<button onclick="add(3)">INC INC</button>
<button onclick="tra()">Traverse</button>
<button onclick="verf()">verify</button>

</body>
</html>