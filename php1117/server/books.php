<?php
require_once "configDB.php";

//print_r($_GET);
//létrehoz annyi php változót ahány kulcs érkezik az url-be
extract($_GET);
//echo $categ;
//echo $id;


$sql = "SELECT id, title, author from books where category = '{$categ}'";
$stmt=$db->query($sql);

$tomb=$stmt->fetchAll();

//print_r($tomb);
echo json_encode($tomb);
?>
