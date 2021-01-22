<?php
$table = array(array());
for ($i=1;$i<=6;$i++){
    echo "\n";
    for ($j=1;$j<=6;$j++){
        $table[$i][$j] = $i *$j;
        echo ($table[$i][$j]."\t");
    }
}
echo 'This sentence is for test PR function.';
