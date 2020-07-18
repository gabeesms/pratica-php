<?php

require 'Carro.php';

echo "<h3> Carro 1 </h3>";
$carro1 = new Carro();

$carro1->setModelo('Palio');

$carro1->setCor('Azul');

$carro1->setMarca('Fiat');

$carro1->setAno('2020');

$carro1->obtemDadosCarro();


echo "<h3> Carro 2 </h3>";
$carro2 = new Carro();
$carro2->carroCompleto(['Hilux', 'Cinza', 'Toyota', '2009']);
$carro2->obtemDadosCarro();

?>