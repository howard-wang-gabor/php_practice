<?php
    echo "What array do you want to input ";
    $arr_input = rtrim(fgets(STDIN));
    $arr = array();
    $pieces_1 = explode("[", $arr_input);
    $pieces_2 = explode("]", $pieces_1[1]);
    $pieces_3 = explode(",", $pieces_2[0]);

    for ($i=0;$i<count($pieces_3);$i++){
        echo $pieces_3[$i]."\n";
        array_push($arr, $pieces_3[$i]);
    }
    echo "What index do you want to change ";
    $idx_input = rtrim(fgets(STDIN));
    $idx = intval($idx_input);
    var_dump($idx);
    $arr[$idx] = ("$".$arr[$idx]);
    print_r($arr)
?>
