<?php
    $num_list = array(3,5,2,9,7,8,10, 1);
    $a = array_values($num_list);
    $odd = array();
    // print_r(($num_list[count($num_list)-1])."\n");
    // end($array)
    // print_r(array_values($num_list[));
    for ($i=(count($num_list)-1);$i>0;$i--){
        // print_r($num_list[$i]."\n");
        if ($a[$i] % 2==0){
            // print_r($a[$i]."\n");
            array_push($odd,$a[$i]);
        }
    }
    print_r($odd[0]."\n");
