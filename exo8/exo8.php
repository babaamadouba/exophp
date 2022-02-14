<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="exo8.css">

  
    

</head>
<body>
<div class="contenu">
    <p class="p1">afficher la liste de n element </p>

<form action="exo8.php" method="POST">

<label class="number" for="number">entrer un nombre</label>
<input type="text" name="number" id="number">
<input class="submit" type="submit" value="envoyer">
</form>



<?php
include("fonction.php");

if (isset($_POST["number"]) and !empty($_POST["number"])){

    $a=$_POST["number"];
    
    liste($a);
    
}

?>



</div>







    
</body>
</html>