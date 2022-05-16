<?php
require 'Database.php';
header("Content-Type: application/json; charset=UTF-8");
$db = new Database();
if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $id = $_POST['id'];
    $text = $_POST['text'];
    $sql = "UPDATE todos SET title='$text' WHERE id='$id'";
    $query = $db->update($sql);
    die(json_encode([
        'status'=>true
    ]));
}