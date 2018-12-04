<?php


if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['choix'])){
    echo("Bonjour !");
    echo("Je sais comment tu t'appelles, hé hé. Tu t'appelles " . " " . $_POST['nom']. " " .$_POST['prenom']. " " . $_POST['choix'] . " " .$_POST['fileToUpload']. "!");
}else {
    echo '<p>Cette page ne contient que du HTML.<br/><p>';
    echo '<p>Veuillez taper votre Nom ainsi que votre Prénom :</p>';
    echo '<form method="post" action="">';
    echo 'Votre nom: <input type="text" name="nom" required/> <br>';
    echo 'Votre prénom: <input type="text" name="prenom" required/> <br>';
    echo 'Votre SEXE: <select name="choix" size="1" required>';
    echo '<option>Monsieur';
    echo '<option>Madame';
    echo '</select> <br>';
    echo '<form action="" method="post" enctype="multipart/form-data">
    Selectionnez une image à upload : 
        <input type="file" method="post" name="fileToUpload" id="fileToUpload" accept=".pdf, .jpg" required>
        <br><input type="submit" value="Valider" name="submit"/>
    </form>';
}

?>