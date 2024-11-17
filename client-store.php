<?php

require_once('classes/CRUD.php');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: client-index.php');
    exit();
}



$crud = new CRUD;
$insert = $crud->insert('client', $_POST);

header("location:client-index.php");

?>