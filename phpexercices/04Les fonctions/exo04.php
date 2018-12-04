<?php
function Taille($nombre1,$nombre2) {



if ($nombre1>$nombre2){
    return $nombre1."est plus grand";
}elseif ($nombre1<$nombre2){
    return $nombre1."est plus petit";
}else {
    return $nombre1."et".$nombre2."sont identiques";
    }
}

print Taille (18, 26)
?>



