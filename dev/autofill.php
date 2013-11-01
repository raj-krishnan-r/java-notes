<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="/j/jquery-1.4.2.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Item</title>
<script>
	$(document).ready(function(){
    $.get("/h/ajax/cat.php",function(data,status){
		var d=data;
		document.getElementById('cat').innerHTML=data;
		//document.getElementById('product').innerHTML=data;

		
});
  });
  function auto()
  {
    $.get("/h/ajax/cat.php",function(data,status)
	{
		var d=data;
		document.getElementById('product').innerHTML=data;
});
		}
 </script>
</head>

<body>
<a href="/h/item_add.php">ADD CATEGORY</a>
<br><br>
<?php
if($_GET['state']==1)
{
	echo"Item alread exists !!!\n";
}
if($_GET['state']==2)
{
	echo"Item added !!!\n";
}
?>
<form action="/h/add_item.php" method="post" id="add">
<input type="text" list="product" required="required" onclick="auto();">
<datalist id="product">
</datalist>
Item Name : <input type="text" name="name" id="name"/><br><br>
Item Description : <br><textarea name="des" id="des"></textarea><br><br>
Price:<br><input type="text" name="price" id="price">₹<br><br>
Category:<br><select name="cat" id="cat">
</select><br><br>
Availability:<br>
Yes : <input type="radio" name="avail" id="avail" value="yes" checked="checked"/>No :
<input type="radio" name="avail" id="avail" value="no">
<input type="button" value="Save" onclick="send();"/>
</form>
</body>
</html>