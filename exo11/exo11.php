<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exo11.css">
</head>
<body>
    <div class="contenu">
<form action="" method="post">

<label for="number">donner un nombre superieur a 10000</label>
<input type="text" name="number"  id="number">
<br><br><br>
<input   class="submit" type="submit" value="valider">
<br><br><br>

</form>

<?php

include("fonction.php");
$tab=array();
if( isset($_POST["number"]) and !empty($_POST["number"])){

      $a=$_POST["number"];
      if($a>=10000)
      tableaupremier($a,$tab);
      else
      echo"<p style='color:red;'>la valeur droit etre superieur ou egale a 10000</p>" ;
}

?>
</div>
    
</body>
</html>