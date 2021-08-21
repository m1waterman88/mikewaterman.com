<?php

foreach (array_keys($routes) as $route) {
    if (empty($route)) {
        unset($routes[$route]);
    }
}

$twigVariables = [
    'routes' => array_keys($routes),
    'uri'    => $uri,
];

echo $twig->render('errors/404.html', $twigVariables);
