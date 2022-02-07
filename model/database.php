<?php 
    $dsn = 'mysql:host=localhost;dbname=todoapp';
    $username = 'username';
    //$password = 'pa55word';

    try {
        $db = new PDO($dsn, $username);
        //$db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = 'Database Error: ';
        $error_message .= $e->getMessage();
        exit();
    }
