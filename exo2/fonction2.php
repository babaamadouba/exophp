<?php

function rectangle($longueur,$largeur){  
$perimetre= ($longueur+$largeur)*2;
$surface=($longueur*$largeur) ;
$diagonale=(sqrt(pow($longueur,2)+pow($largeur,2))) ;
echo 'perimetre'.$perimetre.'</br>';
echo 'surface'.$surface.'</br>';
echo 'diagonale'.$diagonale ;
}

?>