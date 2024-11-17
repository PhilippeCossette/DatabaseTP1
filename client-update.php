<?php
require_once('classes/CRUD.php');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: client-index.php');
    exit();
}

$crud = new CRUD;
$update = $crud->update('client', $_POST);

if($update){
    header("location:client-index.php");
}else{
    echo 'error';
}




?>