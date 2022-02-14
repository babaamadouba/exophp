<?php
include('fonction4.php');
$x=rand(10,500);
$y=rand(10,500);
echo 'avant permutationn x=  '.$x.'  et y= '.$y.'</br>';
permutation($x,$y);
echo 'apres permutationn x=  '.$x.'  et y= '.$y;
?>