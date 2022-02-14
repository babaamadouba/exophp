<?php
include('fonction.php') ;
if(isset($_POST['num'])and !empty($_POST['num'])){

    $num=$_POST['num'];
    if($num>0)
    multiplication1($num);
    else
    echo'le nombre droit etre positif' ;





}



?>