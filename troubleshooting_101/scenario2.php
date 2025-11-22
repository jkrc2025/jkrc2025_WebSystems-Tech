<?php
$conn = mysqli_connect("localhost","root","","class_db");

?>
<form method="POST" action="">
    <input type="text" name="fname" placeholder="Enter first name">
    <button type="submit">Search</button>
</form>
<hr>
<?php
/*nilagyan q ng form para makatype sa form tas submit tas para lumbas yung student*/
$fname = $_POST['fname'];

// $sql = "SELECT * FROM students WHERE first_name = $fname"; 
/*walang '' yung $fname, palagi dapat may quote kapag text, pag gumagamit ng string sa sql*/ 

$sql = "SELECT * FROM students WHERE first_name = '$fname'"; //ito po corrected nilagyan na ng '' yung $fname para maread kang SQL na string yan sya
$res = mysqli_query($conn, $sql);
?>



