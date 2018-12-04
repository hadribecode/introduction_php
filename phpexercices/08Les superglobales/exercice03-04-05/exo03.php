<?php
/*
setcookie('lastname', $_POST["lastname"], time() + 365*24*3600);
setcookie('password', $_POST["password"], time() + 365*24*3600);
*/
echo 'bonjour';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form  method="post" action="exo03.php">;
    Nom: <input type="text" name="lastname">;
    Mot de passe: <input type="password"  name="password">;
    <button>Valider</button>";
    </form>
    <a href="exo04.php">Afficher cookies</a>
    <a href="exo05.php">Modifier les coockies</a>

</body>
</html>