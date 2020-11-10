<?php

$alcohol[0]['year'] = 2000;
$alcohol[0]['type'] = "Vodka";
$alcohol[0]['color'] = "Průhledná";
$alcohol[0]['taste'] = "Hořká";

$alcohol[1]['year'] = 1985;
$alcohol[1]['type'] = "Víno";
$alcohol[1]['color'] = "Bílé";
$alcohol[1]['taste'] = "Suché";

$alcohol[2]['year'] = 2010;
$alcohol[2]['type'] = "Rum";
$alcohol[2]['color'] = "Tmavě černá";
$alcohol[2]['taste'] = "Sladká";

$alcohol[3]['year'] = 1900;
$alcohol[3]['type'] = "Víno";
$alcohol[3]['color'] = "Červená";
$alcohol[3]['taste'] = "Sladká";

$alcohol[4]['year'] = 1998;
$alcohol[4]['type'] = "Medovina";
$alcohol[4]['color'] = "Zlatá";
$alcohol[4]['taste'] = "Sladko-kyselý";

$alcohol[5]['year'] = 2012;
$alcohol[5]['type'] = "Ruský standard";
$alcohol[5]['color'] = "Průhledná";
$alcohol[5]['taste'] = "Hořko-sladká";
//--------------------------------------------------------------------------
$person[0]['firstname'] = "Mikuláš";
$person[0]['lastname'] = "Zábraha";
$person[0]['year'] = 18;
$person[0]['weight'] = 70;
$person[0]['height'] = 180;
$person[0]['alcohol'] = $alcohol[3];

$person[1]['firstname'] = "Michal";
$person[1]['lastname'] = "Holec";
$person[1]['year'] = 20;
$person[1]['weight'] = 80;
$person[1]['height'] = 178;
$person[1]['alcohol'] = $alcohol[2];

$person[2]['firstname'] = "Jarouš";
$person[2]['lastname'] = "Element";
$person[2]['year'] = 78;
$person[2]['weight'] = 120;
$person[2]['height'] = 168;
$person[2]['alcohol'] = $alcohol[0];

$person[3]['firstname'] = "Emil";
$person[3]['lastname'] = "Houba";
$person[3]['year'] = 42;
$person[3]['weight'] = 91;
$person[3]['height'] = 192;
$person[3]['alcohol'] = $alcohol[5];

$person[4]['firstname'] = "Igor";
$person[4]['lastname'] = "Hnízdo";
$person[4]['year'] = 98;
$person[4]['weight'] = 98;
$person[4]['height'] = 198;
$person[4]['alcohol'] = $alcohol[4];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
for ($i=0; $i < 5; $i++) { 
    echo $person[$i]['firstname'] . " " . $person[$i]['alcohol']['year'] . " " . $person[$i]['alcohol']['type'] . " " . $person[$i]['alcohol']['color'] . " " . $person[$i]['alcohol']['taste'];
    ?> <br>
    <?php
}
?>
</body>
</html>