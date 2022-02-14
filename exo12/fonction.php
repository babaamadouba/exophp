<?php

function afficheMois($a){
    
    $tab1=['janvier','avril','juillet','octobre','fevrier','mai','aout','novembre','mars','juin','semptembre','novembre'];

    $tab2=['january','april','july','october','february','may','august','november','mars','juin','september','november','december'];
    $k=0;
    

if($a=="francais"){
    echo"<table style='width:700px;height:500px;'> ";
    for($i=1;$i<=3;$i++){
        echo"<tr>" ;
        
        for($j=0;$j<4;$j++){
            echo "<td style='font-size:40px;'>";
            
            echo $tab1[$k];
           
            $k++;

            echo "<td>";

        }

    echo "</tr>";
 }




    echo"<table>";

}




if($a=="anglais"){
    echo"<table  style='width:700px;height:500px ;'>";
    for($i=1;$i<=3;$i++){
        echo"<tr>" ;
        
        for($j=0;$j<4;$j++){
            echo "<td  style='font-size:40px;'>";
            
            echo $tab2[$k];
           
            $k++;

            echo "<td>";

        }

    echo "</tr>";
 }




    echo"<table>";

}









}


?>