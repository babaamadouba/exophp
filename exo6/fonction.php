<?php

function resolution_equation($a,$b,$c){

if($a<>0){

    $delta=$b*$b-4*$a*$c ;

    if($delta>0){
        $x1=(-$b-sqrt($delta))/2*$a ;
        $x2=(-$b+sqrt($delta))/2*$a ;

        echo'l\'equation admet deux solution x1='.$x1.'   et x2='.$x2 ;

    }

    if ($delta==0){

     echo   'la solution est x0='.-$b/(2*$a) ;
    }

    if($delta<0){
        echo 'l\'equation n\'admet pas de solution dans R ' ;
    }
}

if($a==0){

    if($b<>0){
 echo'la solutin est'.-$c/$b ;

    }
  else{
     if($c==0)
     echo'la solution est l\'enssemble {R}';
     else
     echo'pas de solution ';

  }
  


}



}

?>