<?php

require_once 'models/Posts.php';

$posts = [];

$posts1 = new Posts();
$posts1 = $posts1->selectAll();
$posts[] = $posts1;

$posts2 = new Posts();
$posts2 = $posts2->selectAll();
$posts[] = $posts2;

$posts3 = new Posts();
$posts3 = $posts3->selectAll();
$posts[] = $posts3;

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

$view = 'logs.html';

if ($uri !== 'logs') {
    $view = 'log.html';
    $id = end(explode('/', $uri));
    $posts = $posts[$id - 1];
}

// $baseRoute = explode('/', $uri)[0];

// echo "uri is: {$uri}<br>";
// echo "baseRoute is: {$baseRoute}<br>";
// echo "view is: {$view}<br>";
// echo "id is: {$id}<br>";
// print_r($id);
// print_r($posts);
// die();

$twigVariables = [
    'colors' => $colors,
    'posts'  => $posts,
];

echo $twig->render($view, $twigVariables);
