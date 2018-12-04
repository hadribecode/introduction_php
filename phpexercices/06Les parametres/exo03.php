<?php

if (isset($_GET['dateDebut']) AND isset($_GET['dateFin']) )

{
	echo 'Hello ' . $_GET['dateDebut'] . ' ' . $_GET['dateFin'] . ' ' . ' !';
}


else{
    echo "il manque quelque chose!";
}

?>