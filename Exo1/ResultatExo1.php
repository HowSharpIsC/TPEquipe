<?php

    if(empty($_POST))
    {
        header('Location: FormulaireExo1.php');
        exit;
    }

    $depart = (filter_input(INPUT_POST, 'depart', FILTER_VALIDATE_INT));
    $fin = (filter_input(INPUT_POST, 'fin', FILTER_VALIDATE_INT, array("options" => array("min_range"=>$_POST['depart']))));
    $pas = (filter_input(INPUT_POST, 'pas', FILTER_VALIDATE_INT, array("options" => array("min_range"=>1))));
    $filtreInt = ( (filter_input(INPUT_POST, 'depart', FILTER_VALIDATE_INT)) 
                    && (filter_input(INPUT_POST, 'fin', FILTER_VALIDATE_INT)) 
                    && (filter_input(INPUT_POST, 'pas', FILTER_VALIDATE_INT)) );

    if( !$depart || !$fin || !$pas )
    {
        if(!$filtreInt)
        {
            echo "<script> alert('Veuillez entrer uniquement des nombres entiers'); </script>";
        }
        elseif(!$fin)
        {
            echo "<script> alert('La fin doit être supérieure au début'); </script>";
        }
        elseif(!$pas)
        {
            echo "<script> alert('Le pas doit être supérieur à 0'); </script>";
        }
        echo "<script> window.location.replace('FormulaireExo1.php') </script>";
    }

    require_once("Fonctions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Exo1Css.css" />
</head>
<body>

<?php

    $debut = $_POST["depart"];
    $fin = $_POST["fin"];
    $pas = $_POST["pas"];
    $couleur = $_POST["couleur"];

    CalculPas($debut,$fin,$pas,$couleur);

?>

</body>
</html>