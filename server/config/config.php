<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $_SESSION['users_sl'] = 1;

    require('./config/dbConfig.php');
    require('./config/validations.php');
    require('./config/miscMethods.php');
    require('./api/moneyManager.php');
?>