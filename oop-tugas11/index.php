<?php
require_once 'Animal.php';
require_once 'Frog.php';
require_once 'Ape.php';


$sheep = new Animal("shaun");
echo "Name : " ; echo $sheep->get_name() . "\n"; 
echo "<br>legs : " ; echo $sheep->get_legs() . "\n";
echo "<br>Cold blooded : " ; echo $sheep->get_cold_blooded() . "\n<br><br>";

$kodok = new Frog("buduk");
echo "Name : " ; echo $kodok->get_name() . "\n"; 
echo "<br>legs : " ; echo $kodok->get_legs() . "\n"; 
echo "<br>Cold blooded : " ; echo $kodok->get_cold_blooded() . "\n"; 
echo "<br>Jump : " ; echo $kodok->jump() . "\n<br><br>"; 

$sungokong = new Ape("kera sakti");
echo "Name : " ; echo $sungokong->get_name() . "\n"; 
echo "<br>legs : " ; echo$sungokong->get_legs() . "\n"; 
echo "<br>Cold blooded : " ; echo $sungokong->get_cold_blooded() . "\n"; 
echo "<br>Yell : " ; echo $sungokong->yell() . "\n"; 
?> 

