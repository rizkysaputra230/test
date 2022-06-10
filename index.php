<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: c:\xampp\htdocs\crud_test) Or (c:\laragon\www\crud_test)
    $test = "/crud_test";

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $test.'/' :
            require "views/index.php";
            break;
        case $test.'/create' :
            require "views/create.php";
            break;
    }