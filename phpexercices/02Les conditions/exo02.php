<?php 

$IsEasy = (bool)true;

if ($IsEasy === true) {
    echo "C'est facile";
} else {
    echo "C'est difficile";
}

if ($IsEasy === $IsEasy) {
    echo " \n C'est facile";
} else {
    echo "C'est difficile";
}

?>