<style>
    *{
        font-family:'Courier New', Courier, monospace
    }
</style>
<h1>矩形星星</h1>
<?php
for($i=0;$i<5;$i++){

    if($i==0 || $i==4){

       for($j=0;$j<5;$j++){
        echo"*";
       }
    }else{
        for($j=0;$j<5;$j++){
            if($j==0||$j==4){
                echo"*";
            }else{
                echo"&nbsp;";
            }
        }
    
    
}
echo"<br>";
}
?>
<h1>矩形星星</h1>
<?php
$size=10;

for($i=0;$i<$size;$i++){
    
    for($j=0;$j<$size;$j++){
       if($i==0 || $i==($size-1) || $j==0 || $j==($size-1) || $i==$j || $i==(($size-1)-$j)){
        echo"*";
       }
    else{
        echo"&nbsp;";
        }        
    }  
    echo"<br>";
}

?>


