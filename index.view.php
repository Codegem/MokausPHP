<?php
// echo "Mokinio duomenys: <br>"; 
// echo "Vardas: {$name}<br>";
// echo "Pavarde: {$lastName}<br>";
// echo "Amzius: {$age}<br>";
// echo "Pomegiai: <br>{$likes[0]}<br>
//                 {$likes[1]}<br>
//                 {$likes[2]}";
// echo $total++;
// echo $html = "<div><p>Labas</p></div>";
// $eilute = " Labas rytas, Lietuva! ";
// $ilgis = strlen($eilute);
// $eilute_be_tarpu = trim($eilute);
// $didziosios_raides = strtoupper($eilute);
// $tekstas = str_replace("Lietuva", "Latvija", $eilute);
// echo $tekstas; 
// echo $didziosios_raides;
// echo $ilgis;
// echo $eilute_be_tarpu;
// if($total > 18){
//     echo "Pirma Vieta";
// }
// else if ($total > 12){
//     echo "Antra vieta";
// }
// else if ($total >= 10){
//     echo "Lygus taskai";
// }
// else{
//     echo "Aciu kad dalyvavai";
// }
// switch($total){
//     case 18:
//     echo "pirma vieta";
//     break;
//     case 12:
//     echo "antra vieta";
//     break;
//     case 10:
//     echo "trecia vieta";
//     break;
//     default:
//     echo "aciu kad buvai";
// }
/*
<ul>
    <?php foreach($data2 as $id => $student):?>
    <li><?="$id: $student";?></li>
    <?php endforeach ?>
</ul>
*/

?>

<ul>
    <?php foreach($workers as $id => $list2):?>
    <li><?=$id;?>
        <ul>
            <?php foreach($workers[$id] as $list2):?>
                <li>
                    <?=$list2;?>
                </li>
                <?php endforeach ?>
        </ul>
    </li>
    <?php endforeach ?>
</ul>
