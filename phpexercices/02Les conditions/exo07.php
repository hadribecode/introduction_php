<?php
/*
  echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
*/

$maVariable = (bool)false;

if ($maVariable == false) {
    echo "C'est pas bon!!!";
} else {
    echo "C'est ok!";
}

?>