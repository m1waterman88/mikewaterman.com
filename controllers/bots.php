<?php

$twigVariables = [
    'email' => 'mike@mikewaterman.com',
];

$botFile = $uri;

echo $twig->render($botFile, $twigVariables);
