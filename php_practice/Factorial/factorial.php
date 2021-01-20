
<?php
// solution1
function Factorial_1($n){
    if ($n<=0){
        echo ("You need to input the postive num.");
        return ;
    }
    $a = 1;
    for ($i=1;$i<=$n;$i++){
        $a = $a * $i;
    }
    return $a;
}
// solution2
function Factorial_2($n){
    if ($n==1){
        return 1;
    }
    elseif ($n<=0){
        echo ("You need to input the postive num.");
        return ;
    }
    else{
        return $n*(Factorial_2($n-1));
    }
}
echo Factorial_2(10)."\n";
?>