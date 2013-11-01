<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<p>
Name: <span id="jname"></span><br>  
Age: <span id="jage"></span><br> 
Address: <span id="jstreet"></span><br> 
Phone: <span id="jphone"></span><br> 
</p>  

<script>
var JSONObject = {
  "name":"John Johnson",
  "City":"Oslo West 16", 
  "age":33,
  "phone":"555 1234567"};
document.getElementById("jname").innerHTML=JSONObject.name  
document.getElementById("jage").innerHTML=JSONObject.age  
document.getElementById("jstreet").innerHTML=JSONObject.City  
document.getElementById("jphone").innerHTML=JSONObject.phone  
</script>
