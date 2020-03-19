<?php
$mensen = readline("Wie zit er in de klas?" .PHP_EOL);
$naam = explode(" ", $mensen);
echo "de mensen van de klas zijn:".PHP_EOL;
foreach($naam as $mensen){
    echo $mensen .PHP_EOL;
}


?>