<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ban ke title dil uda uda haey</title>
<script src="j/j.js"></script>
<script>
function update()
{
window.setInterval("count()",100);
}
function count()
{
	var lim=100;
	var con=document.getElementById('space').value;
	var val=con.length;
	var left=lim-val;
	//document.getElementById('count').innerHTML=val;
	document.getElementById('left').innerHTML=left;

	if(left<0)
	{
		document.getElementById('info').style.display='block';
		document.getElementById('space').style.color='#900';

}
else
{
			document.getElementById('info').style.display='none';

}
if(left<0)
{
			document.getElementById('Save').disabled='disabled';

}
else if(left>=0)
{
				document.getElementById('Save').removeAttribute('disabled');
				document.getElementById('space').style.color='#000';


}
}
function dis()
{
	var word=document.getElementById('space').innerHTML;
	$.post("db.php",
    {
      word:word,
      city:"null"
    },
    function(data,status){
     alert("Data: " + data + "\nStatus: " + status);
	});
	document.getElementById('space').disabled='disabled';

}
function sel()
{
//	document.getElementById('space').innerHTML.fontsize(50);
document.getElementById('space').select();
window.getSelection();
}
</script>
</head>

<body onload="update()">
<span id="left" style="color:#F00; font-family:'Segoe UI Light', Arial; font-size:18px; color:#06C;"></span><span style="font-family:Arial, Helvetica, sans-serif;"> more left !!!</span>
<form id="note" method="post">
  <p>
    <textarea style="font-family:Arial, Helvetica, sans-serif; font-size:14px;color:#000;" name="space" id="space" cols="50" rows="5" value=""></textarea>
  </p>
  <button id="Save" name="save" onclick="dis();">Save Note</button><button onclick="sel();" id="sel">Select All</button>
 
</form>
<font id="info" style="display:none;color:#03F;font-family:'Segoe UI Light', Arial;font-size:14px;">Sorry, you have reached the limit of this note. Shorten the note to proceed.</font>
</body>
</html>