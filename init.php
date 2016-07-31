<?php

$GLOBALS['config'] = array(
    'db' => array(
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'db' => 'my_masterchief36'
    ),
    'site' => array(
        'name' => "MasterChief36",
        'theme' => "default"
    )
);

function autoload($class) {
    require_once 'libs/' . $class . '.php';
}

spl_autoload_register('autoload');

?>
