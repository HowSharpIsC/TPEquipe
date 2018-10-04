<?php

    function CalculPas($debut, $fin, $pas)
    {
        for ($i = $debut; $i <= $fin ; $i += $pas) 
        { 
            echo $i . "<br>";
        }
    }

?>