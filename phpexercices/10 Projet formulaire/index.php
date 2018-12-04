<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
<form action="user.php" method="GET">
    <p>
        Inscrivez Nom <input  type="text" name="nom" />

    </p>
    <p>
        Prénom <input type="text" name="prenom" />
        
    </p>
    <p>
        Email <input type="mail" name="mail" />
    </p>
    <p>
       <label for="commentaire">Commentaire</label><br />
       <textarea name="commentaire" id="commentaire"></textarea>
   </p>
   <select name="genre">
    <option value="homme">homme</option>
    <option value="femme">femme</option>
    <input type="submit" value="Valider" />
</select>
</form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>





prénom & nom + email + pays + message + genre (H/F) + sujet (3 sujets possibles, plusieurs choix possibles) Tous les champs sont obligatoires, sauf le sujet (dans ce cas, valeur = "Autre")