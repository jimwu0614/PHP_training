<h1>流程結構</h1>
<H3>if..eles</H3>
<?php
$score=20;
echo"成績=" ,$score;
echo"<br>";
if($score>=60)
{if ($score>=80) {echo "bravo";}else {echo"及格";}}
else
{if ($score<=30) {echo"damn";} else {echo "不及格";}}

?>
<hr>

<?php

if($score >= 85)
     {echo "bravo";

}else if($score>=60)
     {echo "及格";

}else if($score>=30)
     {echo "不及格";

}else{echo "damn";}



?>



<h2>switch...case</h2>

<?php
$score=-1;
$level=($score>100 || $score<0)? 5 : floor($score/25);
echo $score;
echo"<br>";
echo $level;
echo"<br>";


switch($level){
    case 4: //100up
    case 3: //75~99
        echo "welldone";
    break;
    case 2:  //50~74
        echo "good";
    break;
    case 1: //25~49
        echo "bad";
    break;
    case 0; // 0~24
        echo "worse";
    break;
    case 5:
        echo"Error";
}
?>
<h3>閏年</h3>
<?PHP
$year=96;
$level=($year<0)? 5 :floor($year/4);
echo $year;
echo "<br>";
if ($year%4) {echo "平年";} else {if $year echo "潤年";}

?>



<hr>
<?php
$year=96;
echo "年=>" . $year . "<BR>";

if()


?>