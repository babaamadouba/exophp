<?php
class point{
    public  float $x;
    public   float $y ;
    function  __construct($x,$y){
        $this->x=$x;
        $this->y=$y;

    }

    function affichepoint(){

      echo $this->x .'    ';
      echo $this->y;
     

    }


}


?>