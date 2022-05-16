<?php
require 'Database.php';
header("Content-Type: application/json; charset=UTF-8");
$db = new Database();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $task = $_POST['task'];
    $sql = "INSERT INTO todos(title) values ('$task')";
    $query = $db->insert($sql);
    if (@$query == 1){
        die(json_encode(['status'=>true]));
    }else{
        die(json_encode(['status'=>false]));
    }
}

