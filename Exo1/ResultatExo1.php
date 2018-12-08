<?php

    if(empty($_POST))
    {
        header('Location: FormulaireExo1.php');
        exit;
    }

    $Tab = array(
        "Le nombre de départ doit être présent",
        "Le nombre de fin doit être présent",
        "Le pas doit être présent",
        "Une couleur doit être séléctionnée",
        "Le nombre de fin doit être un entier supérieur au nombre de départ",
        "Le pas doit être un entier supérieur à 0",
        "Le nombre de départ doit être un entier"
    );

    if ( empty($_POST['depart']) || empty($_POST['fin']) || empty($_POST['pas']) || empty($_POST['couleur']) )
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            require("FormulaireExo1.php");
        }

        if ( empty($_POST['depart']) )
        {
            echo $Tab[0];
            echo "<br>";
        }
        if ( empty($_POST['fin']) )
        {
            echo $Tab[1];
            echo "<br>";
        }

        if ( empty($_POST['pas']) )
        {
            echo $Tab[2];
            echo "<br>";
        }
        if ( empty($_POST['couleur']) )
        {
            echo $Tab[3];
        }
    }
    else
    {

        $debut = (filter_input(INPUT_POST, 'depart', FILTER_VALIDATE_INT));
        $fin = (filter_input(INPUT_POST, 'fin', FILTER_VALIDATE_INT, array("options" => array("min_range"=>$_POST['depart']))));
        $pas = (filter_input(INPUT_POST, 'pas', FILTER_VALIDATE_INT, array("options" => array("min_range"=>1))));
        $couleur = $_POST["couleur"];
        
        require_once("Fonctions.php");

        if ($debut && $fin && $pas && $couleur)
        {
            CalculPas($debut,$fin,$pas,$couleur);
        }
        else
        {
            require("FormulaireExo1.php");

            if (!$fin)
            {
                echo $Tab[4];
                echo "<br>";
            }
            if (!$pas)
            {
                echo $Tab[5];
                echo "<br>";
            }
            if (!$debut)
            {
                echo $Tab[6];
            }
        }
    }
?>