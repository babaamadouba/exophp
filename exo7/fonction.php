<?php
    function bisextile($annee){

         if($annee%4==0 &&($annee%100<>0 or $annee%400==0)){
            return true;
         }

        else{
        return false ;
        }
}


    function nombreDeJours($mois,$annee){

        if($mois>0 && $mois<=12){

       
          if( bisextile($annee) && $mois==2){

            return 29 ;
          }
          else if($mois==2)
          return 28;

          if($mois==4 or $mois==6 or $mois==9 or $mois==11){
              return 30;
          }
          else
          return 31;
    
        }

        else 
        echo'le mois droit etre entre 1 et 12' ;






}

function dateValide($jours,$mois,$annee){

    $valide=false;

    if($mois>0 && $mois<=12){

        if($jours>0 && $jours<=nombreDeJours($mois,$annee)){
            $valide=true;

         }
           
      }
      return $valide;

}


function dateSuivante($jours,$mois,$annee){

    if(dateValide($jours,$mois,$annee)){

        if($jours==nombreDeJours($mois,$annee)){
             $jours=1;
         if($mois==12){
             $mois=1;
             $annee=$annee+1;
        }
        else
        $mois=$mois+1;



        }
        else
        $jours=$jours+1;

        echo'la date suivante est '.$jours.'/'.$mois.'/'.$annee.'</br>' ;
      


    }

    else
    echo '<p style="color:red ;">date non valide </p>';

    





}




function datePrecedente($jours,$mois,$annee){

    if(dateValide($jours,$mois,$annee)){

     $t=mktime(00,00,00,$mois,$jours,$annee)-86400 ;

     $jours=date('d',$t);
     $mois=date('m',$t);
     $annee=date('Y',$t);
      echo 'la date precedente est'.$jours.'/'.$mois.'/'.$annee ;
      }

    else{
    echo '<p style="color:red ;">date non valide </p>';
    }
}

     
?>




