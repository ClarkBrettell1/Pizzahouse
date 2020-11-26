<?php
ob_start();
session_start();

require_once 'config.php';

require_once 'helpers/system_helper.php';

spl_autoload_register(function ($class_name) {
    require_once 'lib/' . $class_name . '.php';
});

ob_end_flush();