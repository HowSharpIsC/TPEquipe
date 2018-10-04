<?php

    function CalculPas($debut, $fin, $pas, $couleur)
    {
        if ($couleur == "bleu")
        {
            echo '<span style = "color: blue"';
        }
        elseif ($couleur == "rouge")
        {
            echo '<span style = "color: red"';            
        }

        for ($i = $debut; $i <= $fin ; $i += $pas) 
        { 
            echo $i . '<br>';
        }

        echo '</span>';
    }

?>