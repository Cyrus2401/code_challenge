<?php

    function vowelCount($sentence){

        $vowels = ["a", "e", "i", "o", "u", "y"];

        $vowelFound = []; 
        $showVowel = "";
        $count = 0;

        for ($i=0; $i < strlen($sentence) ; $i++) { 
        
            if(in_array($sentence[$i], $vowels)){
                $count++;
                $vowelFound[] = $sentence[$i];
            }

        }

        switch ($count) {
            case 0:
                $result = "<strong>'" . $sentence . "'</strong> ne contient aucune voyelle.";
                break;

            case 1:
                $result = "<strong>'" . $sentence . "'</strong> ne contient qu'une seule voyelle qu'est : " . $vowelFound[0];
                break;
            
            default:
                foreach ($vowelFound as $key => $value) {
                    if($key != array_key_last($vowelFound)){

                        $showVowel .=  $value . ", ";

                    }else{

                        $showVowel .=  $value;

                    }

                }

                $result = "<strong>'" . $sentence . "'</strong> contient " . $count . " voyelles que sont : <strong>" . $showVowel . "</strong>";
                break;
        }

        return $result;

    }

    echo "<p>" . vowelCount("Hmmm!!!") . "</p>";
    echo "<p>" . vowelCount("Bro") . "</p>";
    echo "<p>" . vowelCount("Cyrus est un développeur Système") . "</p>";

?>