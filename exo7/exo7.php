<?php
include('fonction.php');
?>
<form method="Post" action="">
<div>
<label for="jours">entrer le jour:               </label>
<input type="text" name="jours" id="jours">
 
</div>
<div>
<label for="mois">entrer le mois entre 1 et 12:   </label>
<input type="text" name="mois" id="mois">
 
</div>

<div>
<label for="annee">entrer l \'annee':             </label>
<input type="text" name="annee" id="annee">
 
</div>
<input type="submit" value="entrer">

</form>

<?php

if(isset($_POST['jours']) and !empty($_POST['jours']) and isset($_POST['mois'])and !empty($_POST['mois']) and isset($_POST['annee'])and !empty($_POST['annee'])){
$jours=$_POST['jours'];
$mois=$_POST['mois'];
$annee=$_POST['annee'];
echo 'la date entrer'.$jours.'/'.$mois.'/'.$annee.' <br> <br>' ;

dateSuivante($jours,$mois,$annee);

}


?>