<?php

$towns = [
    '1150' => 'Woluwé-Saint-Pierre',
    '1160' => 'Auderghem',
    '1180' => 'Uccle',
    '1050' => 'Ixelles',
    '1130' => 'Bruxelles',
    '1020' => 'Bruxelles',
    '1030' => 'Schaerbeek',
    '1083' => 'Ganshoren',
    '1080' => 'Molenbeek-Saint-Jean',
    '1070' => 'Anderlecht',
    '1000' => 'Bruxelles',
    '1170' => 'Watermael-Boitsfort',
    '1081' => 'Koekelberg',
    '1082' => 'Berchem-Sainte-Agathe',
    '1210' => 'Saint-Josse-ten-noode',
    '1040' => 'Etterbeek',
    '1120' => 'Bruxelles',
    '1190' => 'Forest',
    '1200' => 'Woluwe-Saint-Lambert',
    '1090' => 'Jette',
    '1140' => 'Evere',
    '1060' => 'Saint-Gilles',
];

$uri = $_SERVER['REQUEST_URI'];

list($notused, $lang, $country, $city,  $postcode) = explode('/', $uri);

if ($lang === 'en') {
    $langfile = 'index.html';
} else {
    $langfile = $lang.'.html';
}

$file = file_get_contents(__DIR__.'/../../'.$langfile);

$file = str_replace(['./', 'voisin?">', 'voisin ?'], ['/', 'voisin à '.$towns[$postcode].' ?">', 'voisin à '.$towns[$postcode].' ?'], $file);

echo $file;
