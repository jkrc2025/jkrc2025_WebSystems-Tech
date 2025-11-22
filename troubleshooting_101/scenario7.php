<!-- Form ulit para sa POST input -->
<form action="scenario7.php" method="POST">
  <input type="text" name="id" placeholder="Student ID">
  <input type="email" name="email" placeholder="New Email">
  <button type="submit">Update</button>
</form>


<?php
$conn = mysqli_connect("localhost","root","","class_db");


$id = $_POST['id'];
$email = $_POST['email'];
//$sql = "UPDATE students SET email=$email WHERE id=$id"; //walng quote sa email tas mali yung column name
$sql = "UPDATE students SET email='$email' WHERE student_id=$id";
$res = mysqli_query($conn, $sql);

if ($res) {
    echo "Updated!";
} else {
    echo "Error updating: " . mysqli_error($conn);
}

/* gamit ng if else para malaman kung successful yung update
para sa error feedback*/
?>
