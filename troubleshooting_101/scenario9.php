
<?php
//$id = $_POST['id'];
$id = isset($_GET['id']) ? $_GET['id'] : null;
/*nagwawarning sya sa browser pag pinalitan lang ng GET yung POST pero gumagana yung link<
still para mawala yung warning bago iclick su link make sure ta na su key nag eexist bago iaccess*/
echo "Student ID: " . $id;

?>
<a href="scenario9.php?id=3">View Student</a>
