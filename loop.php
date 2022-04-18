<h1>迴圈</h1>
<?PHP

//for($i=1 ; $i<100 ; $i=$i+2){
//    echo ($i).",";}


?>
<hr>



<H1>while/do....while</H1>

<hr>

<?php
$i=1;
while($i<100){

    echo($i).",";
    $i=$i+1;
}


echo"<hr>";

$i=10;
do{
   
    echo $i;
    $i=$i+10;


}while($i<=100);
?>

<H1>巢狀迴圈</H1>
<?php

$n=100;                 
$sqrt=ceil(sqrt($n));

for($i=1 ; $i<$n ; $i=$i+2)
{
    echo"$i".",";
}

echo"<hr>";

for($j=0 ; $j<=$n ; $j=$j+10)
echo"$j".",";

echo"<hr>";

echo "<h1>質數</h1>";

for($k=2 ; $k<=$sqrt ; $k++);
{
    echo $k . "=>" . $n%$k . "<br>";
}
?>

<?php

$n=100;

for($j=3 ; $j<$n ; $j++){
    $test=false;
    $sqrt=ceil(sqrt($j));

    for($i=2;$i<=$sqrt;$i++){
        if($j%$i==0){
            $test=true;
            break;
        }
    }

    if($test==false){
        echo $j.',';
    }

}


?>