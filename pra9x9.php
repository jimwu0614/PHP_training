<style>
    table{color: blue;
        border: 2px solid black;
        border-collapse: collapse;
    }
    td{border: 1px solid red;
        padding: 5px 10px;
    }

</style>
<H1>九九乘法</H1>
<?php
echo"<table>";
for($i=1;$i<=9;$i++){
    if($i%2==0){
        echo"<tr style='background:lightblue'>";
    }

for($j=1;$j<=9;$j++){
    if ($j%2==0){
        echo "<td style='background:lightgreen'>{$i}x{$j}=";
        echo $i*$j;
        echo "</td>";
    }
        else{            
            echo "<td>{$i}x{$j}=";
            echo $i*$j;
            echo "</td>";
        }
}
echo"</tr>";
}
echo"</table>";




?>
<?php
echo"<table>";
for($i=0;$i<10;$i++){
    echo"<tr>";
for($j=0;$j<10;$j++){
    if($i==0){
        echo "<td>$j</td>";
    }else if($j==0){
        echo "<td>$i</td>";
    }else{
    echo "<td>";
    echo $i*$j;
    echo "</td>";
    }
        
}
echo"</tr>";
}
echo"</table>";

?>