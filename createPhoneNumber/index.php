<?php

    function getPhoneNumber($array){

        $phoneNumber = ""; 
        $str = "";

        for ($i=0; $i < 3 ; $i++) { 
            $str .= $array[$i];
        }

        $phoneNumber = "(" . $str . ") ";
        $str = "";

        for ($i=3; $i < 6 ; $i++) { 
            $str .= $array[$i];
        }   
        
        $phoneNumber .= $str . "-";
        $str = "";

        for ($i=6; $i < count($array) ; $i++) { 
            $str .= $array[$i];
        }

        $phoneNumber .= $str;

        echo "<strong>Phone Number : </strong>" . $phoneNumber;

    }

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    
    getPhoneNumber($array);

?>