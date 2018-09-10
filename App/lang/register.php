<?php
    /**
     * Created by PhpStorm.
     * User: kai
     * Date: 6/28/14
     * Time: 4:06 PM
     */


    $files = [
        'home',
    ];

    foreach ($languages as $language) {
        foreach ($files as $file) {
            include_once $language . '/' . $file . '.php';
        }
    }
