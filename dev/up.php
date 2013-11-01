<?php
if (($_FILES["file"]["type"] == "image/jpeg")
 || ($_FILES["file"]["type"] == "image/pjpeg")&&($_FILES["file"]["size"] < 10000000))
 {
	 move_uploaded_file($_FILES["file"]["tmp_name"],"C:\\lserver\\htdocs\\dev\\supload\\".$_FILES["file"]["name"]);
echo "C:\lserver\htdocs\dev\supload\\".$_FILES["file"]["name"]."<br>";
echo round(($_FILES['file']['size'])/1024)." KB";
 }
 else
 {
	 echo 1;
 }
 ?>