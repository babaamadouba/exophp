<?php
 
 function somme($a,$b){
     $somme=$a+$b ;
     return $somme;

}

function produit($a,$b){
    $produit=$a*$b ;
    return $produit;
}

function diff($a,$b){
    
    $difference=$a-$b;
    return $difference;

}
function expo($a,$b){

    $expo= pow($a,$b);
    return $expo;




}
function division($a,$b){
    if($b <> 0)
    {
    $div=$a/$b;
    return $div ;
    }
    else
    echo 'division imposible';
}
function modulo($a,$b){

    if($b<>0)
    {
       $mod=$a%$b ;
       return $b ;
    }
    else
    echo 'imposible';



}

function carre1($a){
    return $a *$a;
}



?>