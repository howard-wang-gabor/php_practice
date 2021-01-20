<?php

$word_a = "football";
$word_b = "footboll";
$store_list = array();
for ($i=0;$i<=strlen($word_a);$i++){
    if ($word_a[$i] != $word_b[$i]){
        array_push($store_list, $word_a[$i]);
        $idx = $i;
        break;
    }
}
echo "index ".$idx.": '".$word_a[$idx]."' vs '".$word_b[$idx]."'"."\n";
?>
