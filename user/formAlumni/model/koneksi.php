<?php 
    $username = 'root';
    $password = '';
    $database = 'survey';
    try{
        $db = new mysqli('localhost', $username, $password, $database);
        if($db->connect_error){
            die('Connection failed: ' . $db->connect_error);
        }
    }catch(Exception $e){
        die($e->getMessage());
    }
?>