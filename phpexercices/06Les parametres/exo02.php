<?php

if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age']))

{
	echo 'Hello ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' ' . $_GET['age'] . ' !';
}

// COMMENT DIRE QU'IL MANQUE SEULEMENT L'AGE?

/*
else{
    echo 'il manque quelque chose!' . ' ' . $_GET['age'] ;
}
*/


?>
