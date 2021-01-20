<?php
for ($i=1; $i<5; $i++) { 
    //顯示空格
     for ($k=$i;$k<$s;$k++) { 
        echo " ";
    }
    //顯示*
    for($j=0;$j<$i*2-1;$j++){
        echo "*";
    }
    echo "\n";
}
for ($i=5; $i>1; $i--) { 
    //顯示空格
     for ($k=$i;$k<$s;$k++) { 
        echo " ";
    }
    //顯示*
    for($j=0;$j<$i*2-1;$j++){
        echo "*";
    }
    echo "\n";
}
?>