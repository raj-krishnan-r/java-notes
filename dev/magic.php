<?php
//Bingo Page
//Smiley replacer
function magic($w)
{
$notes = $w;
$notes = str_replace(":-P","<img src = \"/sm/tongue.png\">","".$notes."");
$notes = str_replace(":-)","<img src = \"/sm/smile.png\">","".$notes."");
$notes = str_replace(":)","<img src = \"/sm/smile.png\">","".$notes."");
$notes = str_replace(":-(","<img src = \"/sm/frown.png\">","".$notes."");
$notes = str_replace(":(","<img src = \"/sm/frown.png\">","".$notes."");
$notes = str_replace(":-O","<img src = \"/sm/gasp.png\">","".$notes."");
$notes = str_replace(":O","<img src = \"/sm/gasp.png\">","".$notes."");
$notes = str_replace(":-D","<img src = \"/sm/grin.png\">","".$notes."");
$notes = str_replace(":D","<img src = \"/sm/grin.png\">","".$notes."");
$notes = str_replace(";-D","<img src = \"/sm/wink.png\">","".$notes."");
$notes = str_replace(":D","<img src = \"/sm/wink.png\">","".$notes."");
$notes = str_replace(":3","<img src = \"/sm/curlylips.png\">","".$notes."");
$notes = str_replace(":-*","<img src = \"/sm/kiss.png\">","".$notes."");
$notes = str_replace(":-*","<img src = \"/sm/kiss.png\">","".$notes."");
$notes = str_replace(">:(","<img src = \"/sm/grumpy.png\">","".$notes."");
$notes = str_replace(">:-(","<img src = \"/sm/grumpy.png\">","".$notes."");
$notes = str_replace("8-)","<img src = \"/sm/glasses.png\">","".$notes."");
$notes = str_replace("8)","<img src = \"/sm/glasses.png\">","".$notes."");
$notes = str_replace("B-)","<img src = \"/sm/glasses.png\">","".$notes."");
$notes = str_replace("B)","<img src = \"/sm/glasses.png\">","".$notes."");
$notes = str_replace("8-|","<img src = \"/sm/sunglasses.png\">","".$notes."");
$notes = str_replace("8|","<img src = \"/sm/sunglasses.png\">","".$notes."");
$notes = str_replace("B-|","<img src = \"/sm/sunglasses.png\">","".$notes."");
$notes = str_replace("B|","<img src = \"/sm/sunglasses.png\">","".$notes."");
$notes = str_replace(">:O","<img src = \"/sm/upset.png\">","".$notes."");
$notes = str_replace("o.O","<img src = \"/sm/confused.png\">","".$notes."");
$notes = str_replace("O.o","<img src = \"/sm/confused.png\">","".$notes."");
$notes = str_replace(":v","<img src = \"/sm/pacman.png\">","".$notes."");
$notes = str_replace(":V","<img src = \"/sm/pacman.png\">","".$notes."");
$notes = str_replace("-_-","<img src = \"/sm/squint.png\">","".$notes."");
$notes = str_replace("O:)","<img src = \"/sm/angel.png\">","".$notes."");
$notes = str_replace("O:-)","<img src = \"/sm/angel.png\">","".$notes."");
$notes = str_replace("3:)","<img src = \"/sm/devil.png\">","".$notes."");
$notes = str_replace("3:-)","<img src = \"/sm/devil.png\">","".$notes."");
$notes = str_replace(":-/","<img src = \"/sm/unsure.png\">","".$notes."");
$notes = str_replace(":-/","<img src = \"/sm/unsure.png\">","".$notes."");
$notes = str_replace(":'(","<img src = \"/sm/cry.png\">","".$notes."");
$notes = str_replace("^_^","<img src = \"/sm/kiki.png\">","".$notes."");
$notes = str_replace("_|_","<img src = \"/sm/mid.png\">","".$notes."");
$notes = str_replace("r||","<img src = \"/sm/rupee.png\">","".$notes."");
$notes = str_replace("R||","<img src = \"/sm/rupee.png\">","".$notes."");
return $notes;
}