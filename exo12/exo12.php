<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       
          <select name="langue" id="">
           <option selected name="francais" value="francais">francais</option>
           <option name="anglais" value="anglais">anglais</option>


          </select>
          <input name="valider" type="submit" value="valider">



       
   

    </form>
    <?php
    include("fonction.php");
    if(isset($_POST["valider"])){

        if(isset($_POST["langue"])){

    afficheMois($_POST["langue"]);

    






        }


    






    }
    else{

        afficheMois("francais");
    }


    ?>

    <a href="../exo11/exo11.php"><button>suivant<button></a>
    <a href="../exo11/exo11.php"><button>precedent<button></a>
</body>
</html>