<?php
$handle = fopen ("php://stdin", "r");
function sumOfGroup($k) {
    // Return the sum of the elements of the k'th group.
    $sum=0;
    $a=1;
    $j=0;
    for($i=1;$i<=$k;$i++){        
        $a=$a+$j;
        $j+=2;    
    }
    for($f=1;$f<=$k;$f++){
        $sum+=$a;
        $a+=2;
    }
    return $sum;
}

fscanf($handle, "%i",$k);
$answer = sumOfGroup($k);
echo $answer . "\n";
?>
