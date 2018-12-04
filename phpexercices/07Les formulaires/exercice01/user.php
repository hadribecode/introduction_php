<?php

if (isset($_GET['nom']) AND isset($_GET['prenom']) )

{
    //normalement pour cet exercice il ne faut pas mettre le echo mais pas dans l'exo 3
	echo  $_GET['nom'] . ' ' . $_GET['prenom'] . ' ' . ' !';
}


else{
    echo "il manque quelque chose!";
}

?>