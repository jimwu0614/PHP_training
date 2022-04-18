<h2>陣列</h2>
<?php
$a=['a','b','c','d','e'];
$b="xyz";
echo '$a=>'.is_array($a);
echo "<br>";
echo '$b=>'.$a[3];

?>
<hr>
<?php
$oldtxt = "Hello World!";
$newtxt = 
str_replace
(
"World"
, 
"Dolly"
, 
$oldtxt
);
?> 
 