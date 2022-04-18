<h1>甲乙丙丁</h1>

<pre>
天干:甲乙丙丁戊己庚辛壬癸
地支:子丑寅卯辰巳午未申酉戌亥
</pre>

<?php
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];

$skyland=[];

for($i=0;$i<count($sky);$i++){
    
    for($j=0;$j<count($land);$j++){
        $skyland[]=$sky[$i].$land[$j];
    }
}

// echo "<pre>";
// print_r($skyland);
// echo "</pre>";

$skyland2=[];
$year=(1028-1024);

echo $sky[$year%10] . $land[$year%12];

for($i=1024;$i<=1124;$i++){
    $year=$i-1024;
    $skyland2[$i]=$sky[$year%10] . $land[$year%12];
}
echo "<pre>";
print_r($skyland2);
echo "</pre>";
echo "西元2022年是 [".$skyland2[1028]."] 年";



?>
<hr>

<?php
$a=[2,4,6,1,8];
for($i=0;$i<ceil(count($a)/2);$i++){
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;
    echo "$i => [{$a[0]},{$a[1]},{$a[2]},{$a[3]},{$a[4]}] <br>";
}



?>
