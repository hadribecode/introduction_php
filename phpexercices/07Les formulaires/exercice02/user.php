<?php

if (isset($_POST['nom']) AND isset($_POST['prenom']) )

{

    //normalement pour cet exercice il ne faut pas mettre le echo mais pas dans l'exo 4
	echo  $_POST['nom'] . ' ' . $_POST['prenom'] . ' ' . ' !';
}


else{
    echo "il manque quelque chose!";
}

?>