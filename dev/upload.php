<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function submit()
{
var d = document.getElementById('file').value;
alert(d);
}
</script>
</head>

<body>
<form id="im" action="up.php" method="post" enctype="multipart/form-data">
<input id="file" type="file" name="file" multiple="multiple"/>
</form>
<button onclick="submit()">Upload</button>

</body>
</html>