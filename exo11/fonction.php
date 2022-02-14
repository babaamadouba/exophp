<?php

function premier($n){

    $somme=0;
    for($i=1;$i<=$n;$i++){
        if($n%$i==0)
            $somme=$somme+$i;

    }
     if($somme<=$n+1 )
     return true;
     else 
     return false ;

}

function tableaupremier($n,array &$tab)
{
   $tab=["premier"=>[], "inferieur"=>[], "superieur"=>[]] ;
    $j=0;
    $somme=0;
    $k=0;
    $l=0;
    for($i=1;$i<=$n;$i++){
        if(premier($i)){
          $tab["premier"][$j] =$i;
          $j++;
          $somme=$somme+$i;
          
        }
    }
     
    if($j<>0)
    $moyenne=$somme/$j ;

    for($i=0;$i<count($tab["premier"]);$i++){

        if($tab["premier"][$i]<$moyenne){
            $tab["inferieur"][$k]=$tab["premier"][$i] ;
            $k++;
        }
        if($tab["premier"][$i]>$moyenne){
            $tab["superieur"][$l]=$tab["premier"][$i];
            $l++;
        }
    }

    echo"<p style='color:blue;font-size:20px;'>tableau des valeurs inferieur a la moyenne des nombres premiere</p>";
    echo"</br>";

    echo "<table style='border-collapse:collapse;background-color:green; '>" ;
    $k=0;
    $m=sqrt(count($tab["inferieur"]));
  
for($i=0;$i<$m;$i++){
    echo "<tr>";
      for($j=0;$j<$m;$j++){
    if(isset($tab["inferieur"][$k])){
      echo"<td style='border:1px solid black ;'>";

      echo $tab["inferieur"][$k].'   ';
      $k++;
      
      
      echo"<td>";
    }

      }
            echo "<tr>";
    }

  echo "<table>";

echo"<br><br><br><br>";
echo"<p style='color:blue;font-size:20px;'>tableau des valeurs superieur a la moyenne des nombres premiere</p>";
echo"</br>";
echo "<table style='border-collapse:collapse;background-color:green; '>" ;
$k=0;
$m=sqrt(count($tab["superieur"]));

for($i=0;$i<$m;$i++){
echo "<tr>";
  for($j=0;$j<$m;$j++){
if(isset($tab["superieur"][$k])){
  echo"<td style='border:1px solid black ;'>";

  echo $tab["superieur"][$k].'   ';
  $k++;
  
  
  echo"<td>";
}

  }
        echo "<tr>";
}

echo "<table>";
          
 
   
    
}








?>