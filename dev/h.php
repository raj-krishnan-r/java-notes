<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title id="pt">Facebook Graphing</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<style>
.name 
{
	font-family:"Segoe UI Light", Arial;
	font-size:48px;
	color:#066;
}
.hello
{
	font-family:"Segoe UI Light", Arial;
	font-size:12px;
	color:#069;
}
.uname
{
	font-family:Arial, Helvetica, sans-serif;
	font-size:10px;
	color:#036;
}
</style>
<script>
/*Written by Rajkrishnan based on FB API*/
function graph()
{
	document.getElementById('wait').style.display='block';
	var uname = document.getElementById('uname').value;
	if(uname!=undefined)
	{
    $.get("http://graph.facebook.com/"+uname,function(data,status){
    var JSONObject = data;
	document.getElementById('hello').innerHTML="Hello, ";
	document.getElementById('helloo').innerHTML=" your id in Facebook is ";
	  document.getElementById('fname').innerHTML=JSONObject.first_name;
    document.getElementById('lname').innerHTML=JSONObject.last_name;
  document.getElementById('uid').innerHTML=JSONObject.id;
  document.getElementById('pt').innerHTML="Graphed, "+JSONObject.name;
  });
document.getElementById('ppic').src='http://graph.facebook.com/'+uname+'/picture';
	document.getElementById('wait').style.display='none';
	}
	else
	{
		alert('Please enter a valid and existing Facebook Username');
	}


}
</script>

</head>

<body>

<span class="uname">USER NAME : <input type="text" id="uname"  placeholder = "Your Facebook Username..." size="60"/></span>

<button id="gq" onclick="graph()">Graph It</button>&nbsp;<span id="wait" style="display:none;">Please wait, grabbing data from Facebook...</span>
<br><br><br>
<iframe id="ppic" src="" width="50px" height="50px" frameborder="0"></iframe>
<br>
<span class="hello" id="hello"></span><span id="fname" class="name"></span>&nbsp;<span class="name" id="lname"></span>
<span id = "helloo" class="uname"></span> <b><span class="uname" id="uid"></span></b>

</body>
</html>