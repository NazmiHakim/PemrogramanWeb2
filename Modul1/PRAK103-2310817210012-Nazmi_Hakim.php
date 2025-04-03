<?php 
$celcius = 37.841;
$reamur = $celcius * 4/5;
$fahrenheit = $celcius * 9/5 + 32;
$kelvin = $celcius + 273.15;

function formatNumber($num) {
    return rtrim(rtrim(number_format($num, 4, '.', ''), '0'), '.');
}

echo "Fahrenheit (F) = " . formatNumber($fahrenheit) . "<br>";
echo "Reamur (R) = " . formatNumber($reamur) . "<br>";
echo "Kelvin (K) = " . formatNumber($kelvin) . "<br>";