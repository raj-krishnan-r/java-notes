<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function hd()
{
	document.getElementById('form').style.display='none';
	document.getElementById('sh').style.display='block';
	document.getElementById('hd').style.display='none';


	}
	function sh()
{
	document.getElementById('form').style.display='block';
	document.getElementById('sh').style.display='none';
	document.getElementById('hd').style.display='block';
	}
</script>
</head>

<body>
<div id="form">
<form>
<input type="file">
</form>
</div>
<button id="hd" onclick="hd()">Hide</button>
<button id="sh" onclick="sh()" style="display:none;">Show</button>

</body>
</html>