<?php

function __autoload($class)
{
    $class = strtolower($class);

    $classpath = 'includes/class/class.'.$class.'.php';
    if (file_exists($classpath)) {
        require_once $classpath;
    }

    $classpath = '../includes/class/class.'.$class.'.php';
    if (file_exists($classpath)) {
        require_once $classpath;
    }

    $classpath = '../../includes/class/class.'.$class.'.php';
    if (file_exists($classpath)) {
        require_once $classpath;
    }
}
