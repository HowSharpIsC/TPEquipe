<?php

    if(empty($_POST))
    {
        header('Location: FormulaireExo1.php');
        exit;
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