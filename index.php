<?php

// komentaru tipai | /* */
// kintamieji | 
// $name = "Evaldas";
// $data = ['VIenas', 'Du', 'trys'];
// // var_dump($name);
// // echo "As esu {$name}";
// echo "Mano masyvas {$data[2]}";

$name = "Jonas";
$lastName = "Jonaitis";
$age = 39;
$likes = ['Programuoti', 'Zvejoti', 'Keliauti'];

echo "Mokinio duomenys: <br>"; 
echo "Vardas: {$name}<br>";
echo "Pavarde: {$lastName}<br>";
echo "Amzius: {$age}<br>";
echo "Pomegiai: <br>{$likes[0]}<br>
                {$likes[1]}<br>
                {$likes[2]}";
