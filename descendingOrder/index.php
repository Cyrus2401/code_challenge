<?php

    function descendingOrder($number){

        $array_number = str_split($number);

        rsort($array_number);
    
        $descendingOrderNumber = "";
    
        foreach ($array_number as $key => $value) {
            
            $descendingOrderNumber .= $value;
    
        }
        
        echo $descendingOrderNumber . "<br>";

        echo gettype($descendingOrderNumber);

    }

    descendingOrder(501245) 

?>


