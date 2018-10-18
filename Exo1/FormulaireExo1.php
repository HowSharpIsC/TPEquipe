<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p> salut </p>
<form action = "ResultatExo1.php" method="post">

    <label>Nombre de départ: </label>
    <input type="text" name="depart" required>

    <br>

    <label>Nombre de fin: </label>
    <input type="text" name="fin" required>

    <br>

    <label>Pas: </label>
    <input type="text" name="pas" required>

    <br>

    <label>Couleur bleue </label>
    <input type="radio" name="couleur" value="bleu"> 

    <label>Couleur rouge </label>
    <input type="radio" name="couleur" value="rouge">

    <br>

    <input type="submit" value="OK">

</form>
    
</body>
</html>