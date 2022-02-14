<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exo10.css">
</head>
<body>
<div class="container">
    <p class="inputchamp">creation champs input</p>

<form action="exo10.php" method="post">

<label class="label" for="number">entrer  un  nombre</label>
<input type="text" name="number" id="number">
<input class="submit" type="submit"   value="entrer">
</form>
<div class="divphp"> 
<?php
include('fonction.php');

if( isset($_POST['number']) and !empty($_POST['number']))
{

$a=$_POST['number'];
input1($a);

} 

?>
</div>

</div>


    
</body>
</html>