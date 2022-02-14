<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exo9.css">

</head>
<body>
<div class="conteneur">

<p class="table1">table de multiplication d'un nombre</p>

<form action="exo9.php" method="POST">
<div class='div1'>
<label for="num">entrer un nombre</label>
<input type="text" name="num" id="num">
</div>
<input  class="submit" type="submit" value="valider">










</form>

<div class="divphp">
<?php
include('fonction.php') ;
if(isset($_POST['num'])and !empty($_POST['num'])){

    $num=$_POST['num'];
    if($num>0){
    echo 'table de '.$num.'<br>' ;
    multiplication1($num);
    }
    else
    echo'le nombre droit etre positif' ;





}



?>   

</div>
</div>
    
</body>
</html>