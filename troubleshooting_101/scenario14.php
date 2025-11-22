<!--form ulit -->
<form action="scenario14.php" method="POST">
  <input type="text" name="first_name" placeholder="First Name">
  <input type="text" name="last_name" placeholder="Last Name">
  <input type="email" name="email" placeholder="Email">
  <button type="submit">Insert</button>
</form>
<?php
$conn = mysqli_connect("localhost","root","","class_db");

// $sql = "INSERT INTO students (first_name, last_name, email) VALUES ($data[first_name], $data[last_name], $data[email])"; //nag use ki array na warang quotes
$data = $_POST;

$sql = "INSERT INTO students (first_name, last_name, email) 
        VALUES ('{$data['first_name']}', '{$data['last_name']}', '{$data['email']}')";

$res = mysqli_query($conn, $sql);

if($res){
    echo "Student inserted successfully!";
} else {
    echo "Error inserting student: " . mysqli_error($conn);
}

/* nilagyan ng quotes yung value para maging valid tas nilagyan ng error feedback para makita if successful ang insert.*/
?>
