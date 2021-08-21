<?php

require_once 'core/database/Database.php';
require_once 'core/Router.php';

$dsn = getenv('DB_CONNECTION')
    . ':host=' . getenv('DB_HOST')
    // . ':' . getenv('DB_PORT')
    . ';dbname=' . getenv('DB_DATABASE');

$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');

return Database::connect($dsn, $username, $password);
