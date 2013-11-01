
<?php
$string = "I wrote a lot of stuff today !";
$l = strlen($string);
$r=0;
for($i=0;$i<$l;$i++)
{
	if($string[$i]==' '&&$string[$i]!='!')
	{
		$repo[$r++]=$i;
		$repo[$r++]="<>";
		echo "<br>";
	}
	$string[$i];
}
echo "Address String<br><br>";
 for($i=0;$i<$r;$i++)
echo $repo[$i];
?>