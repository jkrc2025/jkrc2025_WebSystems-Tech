<!-- form kuna para may actual POST value -->
<form action="scenario5.php" method="POST">  
  <input type="email" name="email" placeholder="Enter email">
  <button type="submit">Submit</button>
</form>

<?php
$conn = mysqli_connect("localhost","root","","class_db");

//$emial = $_POST['emial'];  //misspelled

$email = $_POST['email']; 
$sql = "SELECT * FROM students WHERE email='$email'";
$res = mysqli_query($conn, $sql);

/*pinalitan yung key sa $_POST "emaill" imbes na "emial" para tumugma sa form field.*/
?>
