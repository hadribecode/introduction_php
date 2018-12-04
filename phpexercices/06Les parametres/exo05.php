<?php

if (isset($_GET['semaine']) )

{
	echo 'Chiffre ' . $_GET['semaine'] . ' ' . ' !';
}


else{
    echo "il manque quelque chose!";
}

?>