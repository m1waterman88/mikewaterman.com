<?php

$colors = [
    'aquamarine' => 'aquamarine',
    'black'      => 'black',
    'blue'       => '#428bca',
    'coral'      => 'coral',
    'darkorchid' => 'darkorchid',
    'firebrick'  => 'firebrick',
    'gold'       => 'gold',
    'lightgreen' => 'lightgreen',
    'orange'     => '#faa41a',
    'pink'       => 'pink',
    'white'      => 'white',
];

$twigVariables = [
    'colors'     => $colors,
    'phpVersion' => phpversion(),
];

echo $twig->render('home.html', $twigVariables);
