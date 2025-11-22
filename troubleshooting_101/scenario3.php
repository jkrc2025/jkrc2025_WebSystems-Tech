
<?php
$conn = mysqli_connect("localhost","root","","class_db");

?>
<form action="scenario3.php" method="GET">  <!--kailangan may form field para may ma input dahil sa GET method -->
  <input type="number" name="age" placeholder="Enter age">
  <button type="submit">Search</button>
</form>
<hr>

<?php
$age = $_GET['age'];


//$sql = "SELECT * FROM students WHERE age = $age";
//$res = mysqli_query($conn, $sql);

$stmt = $conn->prepare("SELECT * FROM students WHERE age = ?");
$stmt->bind_param("i", $age); // "i" = integer
$stmt->execute();

$res = $stmt->get_result();
// Fetch and display all matching records
while ($row = $res->fetch_assoc()) {
    echo $row['first_name'] . " - " . $row['email'] . "<br>";
}

/*ginamitan ki prepared statement imbes su direct na "$age" sa SQL para maprevent yung SQL injection.
nilagan ko man ki form dahil may GET method tayo, kaya kailangan may input para may value na ipasa sa URL.*/

?>