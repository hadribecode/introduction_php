<?php

//EMPTY s'il est différent de vide il l'affiche (echo)
    if (!empty($_POST['nom']) AND !empty($_POST['prenom']) )

    {
    
        
        echo  $_POST['resto'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' ' . ' !';
    }

    // form action ne rien mettre entre ''  renvoie sur la meme page (ici)
    else { 
        echo '<form action="" method="POST">';

        echo '<select name="resto">';
        echo    '<option value="Otacos">Otacos</option>';
        echo    '<option value="Burguer King">Burguer King</option>';
        echo     '</select>';
        
        echo    '<p>';
        echo        '<input type="text" name="nom" />';
            
        echo    '</p>';
        echo     '<p>';
        echo         '<input type="text" name="prenom" />';
        echo         '<input type="submit" value="Valider" />';
        echo     '</p>';
        echo '</form>';
    }    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice les formulaires exo 05 Php</title>
</head>
<body>

<!--
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
-->
    
</body>
</html>