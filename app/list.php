<?php
require 'Database.php';
header("Content-Type: application/json; charset=UTF-8");
$db = new Database();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sql = "SELECT * FROM todos ORDER BY date_time DESC";
    $query = $db->select($sql);
    if (@$query->num_rows > 0){
        $rs = $query->fetch_all(MYSQLI_ASSOC);
        die(json_encode([
            'status'=>true,
            'data'=>$rs
        ]));
    }else{
        die(json_encode([
            'status'=>false
        ]));
    }
}
