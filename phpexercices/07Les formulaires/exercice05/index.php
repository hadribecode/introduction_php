<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice les formulaires exo 05 Php</title>
</head>
<body>
<form action="user.php" method="POST">

<select name="resto">
    <option value="Otacos">Otacos</option>
    <option value="Burguer King">Burguer King</option>
</select>

    <p>
        <input type="text" name="nom" />
    
    </p>
    <p>
        <input type="text" name="prenom" />
        <input type="submit" value="Valider" />
    </p>
</form>
    
</body>
</html>