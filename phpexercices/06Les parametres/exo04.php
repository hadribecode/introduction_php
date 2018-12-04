<?php

if (isset($_GET['langage']) AND isset($_GET['serveur']) )

{
	echo 'Hello ' . $_GET['langage'] . ' ' . $_GET['serveur'] . ' ' . ' !';
}


else{
    echo "il manque quelque chose!";
}

?>