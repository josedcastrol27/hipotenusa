<?php
echo '<h1>JOSE CASTRO LUGO - 17327923 </h1>';
echo '<h1>CALCULAR LA HIPOTENUSA DEL SIGUIENTE TRIÁNGULO RECTANGULO: </h1>';
echo '<h2>Lado 1: 3cm </h2>';
echo '<h2>Lado 2: 4cm </h2>';
echo '<hr>';

$lado1 = 3;
$lado2 = 4;
$hipotenusa = null;

$hipotenusa = (sqrt (pow($lado1, 2) + pow($lado2, 2)));

echo '<h2> LA HIPOTENUSA DEL TRIÁNGULO ES: </h2>' . $hipotenusa;

?>