<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action = "ResultatExo1.php" method="post">

    <label>Nombre de départ: </label>
    <input id="depart" type="text" name="depart" required>

    <br>

    <label>Nombre de fin: </label>
    <input id="fin" type="text" name="fin" required>

    <br>

    <label>Pas: </label>
    <input id="pas" type="text" name="pas" required>

    <br>

    <label>Couleur bleue </label>
    <input type="radio" name="couleur" value="bleu" required> 

    <label>Couleur rouge </label>
    <input type="radio" name="couleur" value="rouge" required>

    <br>

    <input id="valider" type="submit" value="OK">

</form>
    
</body>
</html>

<script>
    var depart = document.getElementById("depart");
    var fin = document.getElementById("fin");
    var pas = document.getElementById("pas");

    depart.addEventListener("keyup", VerifDepart);
    fin.addEventListener("keyup", VerifFin);
    pas.addEventListener("keyup", VerifPas);

    function VerifDepart() {
        parsedDepart = parseInt(depart.value, 10);

        if (isNaN(parsedDepart)) {
            depart.setCustomValidity("Le départ doit être un nombre entier");
        } else {
            depart.setCustomValidity("");
        }
    }

    function VerifFin() {
        var parsedFin = parseInt(fin.value, 10);

        if (isNaN(parsedFin)) {
            fin.setCustomValidity("La fin doit être un nombre entier");
        } else if (parsedFin < parsedDepart) {
            fin.setCustomValidity("La fin doit être supérieure au départ");
        } else {
            fin.setCustomValidity("");
        }
    }

    function VerifPas() {
        var parsedPas = parseInt(pas.value, 10);

        if (isNaN(parsedPas)) {
            pas.setCustomValidity("Le pas doit être un nombre entier");
        } else if (pas.value <= 0) {
            pas.setCustomValidity("Le pas doit être supérieur à 0");
        } else {
            pas.setCustomValidity("");
        }
    }
</script>