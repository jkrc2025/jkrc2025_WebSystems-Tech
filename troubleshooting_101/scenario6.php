
<?php
$conn = mysqli_connect("localhost","root","","class_db");
//$sql = "DELETE FROM students WHERE id = " . $_GET['id']; //mali column name tas nag GET agad

$id = intval($_GET['id']); 
$sql = "DELETE FROM students WHERE student_id = $id";  
mysqli_query($conn, $sql);

/*naggamit ki intval para number lng makapasok tas pinalitan din yung column name ng id kasi student_id nandon sa db*/
?>


