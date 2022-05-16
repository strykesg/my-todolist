<?php
require 'Database.php';
header("Content-Type: application/json; charset=UTF-8");
$db = new Database();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $sql = "DELETE FROM todos where id = '$id'";
    $query = $db->delete($sql);
    die(json_encode([
        'status'=>true
    ]));
}