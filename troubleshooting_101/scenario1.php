
<?php
$conn = mysqli_connect("localhost", "root", "", "class_db");

//$id = $_POST['id']; 
/*maliii yung POST, kasi ang goal ay maread yung ?id=3 from URL pero ang POST para sa form submission pero wala nman na form na sinusubmit. Kaya po dapat
$_GET kasi para maread yung data sa URL query string. */

$id = $_GET['id'];  //ito corrected line chinange na yung POST to GET

// $sql = "SELECT * FROM students WHERE id = $id"; 
/*maliii kasi wara man yan sya na id sa db pero since students ang igtukoy, i-change natin yan sya sa "student_id"*/

$sql = "SELECT * FROM students WHERE student_id = $id"; //ito corrected line chinange na yung column name

$res = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($res);
echo $r['first_name'];
?>

