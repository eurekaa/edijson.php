<?php
    include_once('libs/json.php');
    include_once('libs/log4php/Logger.php');
    include_once('config/edijson.php');

    // setup logger.
    Logger::configure('config/log4php.xml');
    $log = Logger::getLogger('edijson');

    // start session.
    session_start();

    $log->debug($_SERVER['REQUEST_URI']);

    echo "done23";

?>