<?php
echo "For <br>";

$anio_actual = date("Y");

# for
for ($anio=2016; $anio <= $anio_actual ; $anio++) { 
    echo "Año: $anio <br>";
}
echo "<br> While <br>";

$numero = rand(1, 20);

# while
while ($numero <= 17) {
    echo "Numero: $numero <br>";
    $numero = rand(1, 20);
}
echo "Numero final: $numero <br>";

?>