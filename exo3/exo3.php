<?php
include('fonction3.php');
$a=rand(1,10);
$b=rand(1,10);
echo $a.'et'.$b.'</br>' ;
$somme1= somme($a,$b);
echo 'la somme est '.$somme1.'</br>' ;
$produit= produit($a,$b);
echo 'le produit est '.$produit.'</br>' ;
$modulo= modulo($a,$b);
echo 'le modulo donne '.$modulo.'</br>' ;
$diff= diff($a,$b);
echo 'la  difference est '.$diff.'</br>' ;

$expo= expo($a,$b);
echo 'l expo est '.$expo.'</br>' ;
$carre1= carre1($a);
echo 'le carre de'.$a. 'est '.$carre1.'</br>' ;
$carre2=carre1($b);
echo 'le carre de'.$b.'est'.$carre2.'</br>' ;
$div= division($a,$b);
echo 'la divion est '.$div.'</br>';
?>