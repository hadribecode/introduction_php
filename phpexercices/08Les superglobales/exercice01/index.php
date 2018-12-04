<?php

   echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
   //je sais pas pourquoi c'est là ($broxer et print_r)
   //  $browser = get_browser(null, true);
   //    print_r($browser);
    echo "<br>";
    function get_ip() {
        // IP si internet partagé
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        // IP derrière un proxy
        elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        // Sinon : IP normale
        else {
            return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        }
    }
    echo 'Adresse IP du visiteur : '.get_ip();
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];

?>