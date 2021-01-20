<?php
    function bool_number(array $a){ 
        // var_dump($a);
        $result = array();
        $value = array_values($a);
        for ($i=0;$i<count($a);$i++){
            if ($value[$i]>0){
                // print ("true"."\n");
                array_push($result, "True");
                continue;
                // return True;
            }
            else{
                // echo "False"."\n";
                array_push($result, "False");
                continue;
                // return False;
            };
        };
        if (in_array("False",$result)){
            echo "False"."\n";
            return False;
        }
        else{
            print ("true"."\n");
            return True;
        }
    
        // return $a*$a;
        
      }
      bool_number(array(1,-2,-3))
?>
