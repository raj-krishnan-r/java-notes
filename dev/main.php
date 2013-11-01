<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="j/j.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function send()
{
var co=document.getElementById('note').value;
alert(co);
	$.post("noter.php",
    {
      note:co,
      city:"null"
    },
    function(data,status){
     alert("Data: " + data + "\nStatus: " + status);
	 co="Saved";
	});
}
</script>
</head>

<body>
<form id="form1" name="form1" method="post">
  <textarea name="note" id="note" cols="45" rows="5"></textarea>
  <button onclick="send()">CLOCIKC</button>
</form>
</body>
</html>