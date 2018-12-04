<?php

if (isset($_GET['batiment']) AND isset($_GET['salle']) )

{
	echo 'le numéro du batiment est le ' . $_GET['batiment'] . ' salle numéro ' . $_GET['salle'] . ' ' . ' !';
}


else{
    echo "il manque quelque chose!";
}

?>