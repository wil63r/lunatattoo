<?php
    /**
     * Created by PhpStorm.
     * User: kai
     * Date: 6/28/14
     * Time: 6:00 PM
     */
    session_start();

    $languages = ['en', 'es'];

    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = 'es';
    }

    if (isset($_GET['lang']) && in_array($_GET['lang'], $languages)) {
        $_SESSION['lang'] = $_GET['lang'];
    }

    include "translator.php";
    include "helpers.php";
