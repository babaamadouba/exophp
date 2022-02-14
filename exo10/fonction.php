<?php

function input1($number){
if($number>0){

    for($i=1;$i<=$number;$i++)
    {
      echo "<label> champs $i</label>"."<br>" ;
       echo '<input type="text" name="">'.'</br></br></br>';

    }

}

else
echo'le nombre a saisir droit etre positif';




}



?>