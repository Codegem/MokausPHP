<?php
echo "Mokinio duomenys: <br>"; 
echo "Vardas: {$name}<br>";
echo "Pavarde: {$lastName}<br>";
echo "Amzius: {$age}<br>";
echo "Pomegiai: <br>{$likes[0]}<br>
                {$likes[1]}<br>
                {$likes[2]}";
// echo $total++;
// echo $html = "<div><p>Labas</p></div>";
$eilute = " Labas rytas, Lietuva! ";
$ilgis = strlen($eilute);
$eilute_be_tarpu = trim($eilute);
$didziosios_raides = strtoupper($eilute);
$tekstas = str_replace("Lietuva", "Latvija", $eilute);
echo $tekstas; 
echo $didziosios_raides;
echo $ilgis;
echo $eilute_be_tarpu;
