<?php
require 'Database.php';
header("Content-Type: application/json; charset=UTF-8");
$db = new Database();
if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $id = $_POST['id'];
    $sql = "SELECT * FROM todos where id ='$id'";
    $query =$db->select($sql);
    $rs = $query->fetch_object();
    $value = 1;
    if ($rs->checked == 1){
        $value = 0;
    }
    $newSql = "UPDATE todos SET checked = '$value' WHERE id='$id'";
    $query =$db->select($newSql);
    die(json_encode([
        'status'=>true
    ]));
}