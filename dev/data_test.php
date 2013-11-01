<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
date_default_timezone_set(''.$location.'');
$tts=date('d/m/Y');
$time = date('h:i:s a');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Write </title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
function send()
{
var c=document.getElementById('re').value;
alert(c);
$.post("note_processor_ajax.php",
    {
      notes:c,
      time:"<?php echo $time; ?>",
	  date:"<?php echo $tts; ?>"
    },
    function(data,status){
		alert(data);
	 if(status=='success')
	 {
document.getElementById('re').value="";	
	 }
	 	});
}
	 </script>
</head>

<body>
<form name = "write" id="write" method="post">
<textarea id="re"></textarea>
</form>
<button onclick="send()" id="save">Send</button>

</body>
</html>