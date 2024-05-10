<?php

spl_autoload_register(static function ($className) {
    $path = str_replace('\\', '/', $className. '.php');
    echo $path;
    if (file_exists($path))
        include_once($path);
});
if (isset($_GET['route']))
    $route = $_GET['route'];
else
    $route = '';


$router= \core\Core::get();
$router->run($route);
$router->done();

