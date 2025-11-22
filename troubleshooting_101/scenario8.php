
<?php
$conn = mysqli_connect("localhost","root","","class_db");
$res = mysqli_query($conn,"SELECT * FROM students");
//$row = mysqli_fetch_assoc($res);
//echo $row['email']; // prints first only
while ($row = mysqli_fetch_assoc($res)) {
    echo $row['email'] . "<br>";
}
/*nilagan ki while loop para ma-fetch gabos na rows.
tas echo sa loob ng loop para maoutput lahat ng email.*/
?>
