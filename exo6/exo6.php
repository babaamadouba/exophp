
<?php
include"fonction.php";
?>
<html>

<head>
    <title>exo6</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="exo6.css">
</head>
<body>



<form method="Post" action="exo6.php">
<div class="content" >
<h1>resolution equation du second degres </h1>
<?php

echo "
<div>
<label for='nombre1'>entrer a</label>
<input type='number' name='nombre1' id='nombre1'>  
</div>
<div>
<label for='nombre2'>entrer b</label>
<input type='number' name='nombre2' id='nombre2'>
</div>
<div>
<label for='nombre3'>entrer c</label>
<input type='number' name='nombre3' id='nombre3'>

</div>
<div>
 <input style='width:100px;' type='submit' value='entrer'> 

 </div>" ;

 if( isset($_POST['nombre1']) and !empty($_POST['nombre1']) and isset($_POST['nombre2'])and !empty($_POST['nombre2']) and isset($_POST['nombre3'])and !empty($_POST['nombre3'])    ){


$a=$_POST['nombre1'];
$b=$_POST['nombre2'];
$c=$_POST['nombre3'];

resolution_equation($a,$b,$c);
 }

 ?>

  </div>
</form>

</body>

</html>
