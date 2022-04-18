<h2>建立學生成績陣列</h2>

<?php
$name=['judy','amo','john','peter','hebe'];
$subject=['國文','英文','數學','地理','歷史'];

?>

<h2>九九乘法表</h2>
<?php
for($i=0;$i<=9;$i++){
    for($j=0;$j<=9;$j++);
}       $nine[]="$i X $j =" . ($i*$j)
?>


<H2>威力彩</H2>

<?php

echo "<h3>第一區</H3>";
$lotto=[];
while(count($lotto)<6){
    $num=rand(1,38);
    if(!in_array($num,$lotto)){
        $lotto[]=$num;
    }
}
for($i=0;$i<count($lotto);$i++){
    echo $lotto[$i].",";
}

echo "<h3>第二區</H3>";
echo rand(1,8);

?>
<h2>五百年內閏年</h2>
<?php
$leapYear=[];
$start=2022;
$end=$start+500;
for($year=$start;$year<=$end;$year++)
    if((($year % 4 == 0) && ($year % 100 !=0 )) || ($year%400 == 0)){
    $leapYear[]=$year;
}
echo"<pre>";
print_r($leapYear);
echo"</pre>";

?>

