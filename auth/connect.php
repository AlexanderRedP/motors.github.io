<?php

    $connect = mysqli_connect('localhost', 'root', '', 'saloon');

    if (!$connect) {
        die('Error connect to DataBase');
    }