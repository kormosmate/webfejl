<?php
require_once "configDB.php";
$sql = "SELECT category from books group by category order by category";
$stmt=$db->query($sql);

$tomb=$stmt->fetchAll();

//print_r($tomb);
echo json_encode($tomb);
?>