
<?php
$conn = mysqli_connect("localhost","root","","class_db");

?>
<form method="POST" action="">
    <input type="text" name="fname" placeholder="First name">
    <input type="text" name="lname" placeholder="Last name">
    <button type="submit">Insert</button>
</form>
<hr>
<?php

$first = $_POST['fname']; 
$last = $_POST['lname']; 

//$sql = "INSERT INTO students (first_name,last_name) VALUES ('$first','$last')"; //di chinecheck nito kung empty bago iinsert

if(!empty($first) && !empty($last)){
    $sql = "INSERT INTO students (first_name,last_name) VALUES ('$first','$last')";
    mysqli_query($conn, $sql);
    echo "Name inserted!";
} else {
    echo "Error: No input!";
}

/*nilagyan ng if para siguraduhin if may laman yung first and last name bago mag insert ta nganing kung ma input ma error, kaya pag may blank submission di na masasave*/


?>

