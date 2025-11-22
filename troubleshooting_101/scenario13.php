<!-- form para sa POST input -->
<form action="scenario13.php" method="POST">
  <input type="text" name="id" placeholder="Student ID">
  <input type="email" name="email" placeholder="New Email">
  <button type="submit">Update</button>
</form>

<?php
$conn = mysqli_connect("localhost","root","","class_db");
$newEmail = $_POST['email'];
$id = $_POST['id'];

// $sql = "UPDATE students SET email='$newEmail'";
$sql = "UPDATE students SET email='$newEmail' WHERE student_id=$id";
mysqli_query($conn, $sql);

/* walang WHERE clause kaya lahat na rows sa table mauupdate
kya dinagdagan na WHERE student_id=$id para saro lang na student ang ma-update.*/
?>
