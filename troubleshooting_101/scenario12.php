
<?php
//$id = $_GET['id'];
// $sql = "SELECT * FROM students WHERE id = '$id'"; // id is int
$id = isset($_GET['id']) ? (int)$_GET['id'] : null; // 0 kung wala
$sql = "SELECT * FROM students WHERE id = $id";

echo "SQL query: " . $sql;

 /*since int yung $id di need lagyan ng '' kasi di sya string*/
?>

