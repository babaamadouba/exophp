<?php
include('fonction2.php');
do{
$long=rand(2,1000);
$larg=rand(2,1000);
} while($long < $larg);
echo 'le rectangle de longueur  '.$long.'  et de l\'argeur  '.$larg.'  a pour dimension:'.'</br>' ;
rectangle($long,$larg);

?>