<?php
include('point.php');
function calculDistance($a,$b){
    $a->affichepoint();
    echo'</br>' ;
    $b->affichepoint();
    



}
$x=new point(4,2);
$y=new point(5,3);
calculdistance($x,$y);

?>